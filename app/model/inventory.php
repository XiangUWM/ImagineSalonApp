<?php //Initiate the class
$db_path = '../../../../config/db/db.php';
if (file_exists($db_path)) {
    require($db_path);
    echo '<script>console.log("database connected in the inventory model");</script>';
} else {
        echo '<script>console.log("database is not connected in the inventory model");</script>';
}
function getQuery() {
    $http_referer = $_SERVER['HTTP_REFERER'];
    $query =  str_replace( "&#39;", "'", filter_var(urldecode(explode('?',$http_referer)[1]), FILTER_SANITIZE_STRING));
    $form = explode('&', $query);

    $brand_query = $form[0];
    $vendor_query = $form[1];
    $status_query = $form[2];
    $category_query = $form[3];
    $wholesale_cost_query = $form[4];
    $retail_price_query = $form[5];
    $search_query = $form[6];

    $brand = explode('=', $brand_query)[1];
    $vendor = explode('=', $vendor_query)[1];
    $status = explode('=', $status_query)[1];
    $category = explode('=', $category_query)[1];
    $wholesale_cost = explode('=', $wholesale_cost_query)[1];
    $retail_price = explode('=', $retail_price_query)[1];
    $search = explode('=', $search_query)[1];

    $where_clause = ["brand = ".$brand, "product.vendor_id = ".$vendor, "status_code = ".$status, "category =       ".$category, "wholesale_cost ".$wholesale_cost, "retail_price ".$retail_price, "product.name LIKE CONCAT('%', '".$search."', '%');"];

    $delimiter = implode(" AND ", $where_clause);
    $delimiter = " WHERE ".$delimiter;
    
    getInventory($delimiter);
    
}

function getInventory($delimiter) {
    $database = new DB();
    //OR...
    $database = DB::getInstance();

    $query = "select product_id, brand, product.name as name, vendor.name as vendor, status_code, size, wholesale_cost, retail_price, quantity, upc_code from product inner join vendor on(product.vendor_id = vendor.vendor_id)".$delimiter.";";
    $results = $database->get_results( $query );
    foreach( $results as $row ) {
        echo '  <tr id="inventory-row_'. $row['product_id'] .'">
                <td>'. $row['product_id'] .'</td>
                <td>'. $row['brand'] .'</td>
                <td>'. $row['name'] .'</td>
                <td>'. $row['vendor'] .'</td>
                <td>'. $row['size'] .'</td>
                <td>$'. $row['wholesale_cost'] .'</td>
                <td>$'. $row['retail_price'] .'</td>
                <td>'. $row['quantity'] .'</td>
                <td>'. $row['upc_code'] .'</td>
                </tr>';
    }
}
function runCount($status) {
    
    
    if($status) {
        
    }
    $http_referer = $_SERVER['HTTP_REFERER'];
    $needle = 'q!';
    $haystack = $http_referer;
    if(strrpos($haystack, $needle) >= 1){
       getCountQuery();
    } else {
        echo '<script>console.log("HTTP REFERER NO QUERY: '.$http_referer.'")</script>';
    }
        
}

function getCountQuery() { 
    $http_referer = $_SERVER['HTTP_REFERER']; 
    echo '<script>console.log("HTTP REFERER: '.$http_referer.'")</script>'; 
    $query = filter_var(urldecode(explode('q!',$http_referer)[1]), FILTER_SANITIZE_STRING); 
    $form = explode('&', $query); 
    $params = [];
    $sql = "";
    foreach ($form as $input) { 
        if ($input != null) {
        echo '<script>console.log("Input: '.$input.'")</script>';  
        array_push($params, $input);
        } 
    }
    for($i = 0; $i < sizeof($params); $i+=2) {
        $product = explode('product_id=',$params[$i])[1];
        $quantity = explode('quantity=',$params[$i+1])[1];
        
        $sql = $sql.'UPDATE product SET '.$params[$i+1].' WHERE '.$params[$i].'; ';
        echo '<script>console.log("'.$sql.'")</script>';
        updateInventory($product, $quantity);
    }
}

function updateInventory($product, $quantity) {
   $database = new DB();
    //OR...
    $database = DB::getInstance();

$update = array(
    'quantity' => $quantity
);
//Add the WHERE clauses
$where_clause = array(
    'product_id' => $product
);
$updated = $database->update( 'product', $update, $where_clause, 1 );
if( $updated )
{
    echo '<script>console.log("Successfully updated '.$where_clause['product_id']. ' to '. $update['quantity'].'")</script>';
}}

function updateCountList($status, $countList, $date) {
    $database = new DB();
    //OR...
    $database = DB::getInstance();

$update = array(
    'status' => $status,
    'count_list' => $countList
);

$where_clause = array(
    'date' => $date
);
$updated = $database->update( 'count', $update, $where_clause, 1 );
    if($updated) {
        echo '<script>console.log("Successfully updated '.$where_clause['product_id']. ' to '. $update['quantity'].'")</script>';
    }
}