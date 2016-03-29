<?php //Initiate the class
$db_path = '../../../../config/db/db.php';
if (file_exists($db_path)) {
    require($db_path);
    echo '<script>console.log("database connected");</script>';
} else {
        echo '<script>console.log("database is not connected in the model");</script>';
}
function getQuery() {
    $http_referer = $_SERVER['HTTP_REFERER'];
    $needle = "?";
    $haystack = $http_referer;
    if(strrpos($haystack , $needle) >= 0){

        $query =  str_replace( "&#39;", "'", filter_var(urldecode(explode('?',$http_referer)[1]), FILTER_SANITIZE_STRING));
        $form = explode('&', $query);
        foreach($form as $input) {
            echo '<script>console.log("'.$input.'");</script>';
        }
        echo '<script>console.log("'.$query.'");</script>';

        $brand_query_string = $form[0];
        $vendor_query_string = $form[1];
        $status_query_string = $form[2];
        $category_query_string = $form[3];
        $wholesale_cost_query_string = $form[4];
        $retail_price_query_string = $form[5];
        $search_query_string = $form[6];
        
        $brand = explode('=', $brand_query_string)[1];
        $vendor = explode('=', $vendor_query_string)[1];
        $status = explode('=', $status_query_string)[1];
        $category = explode('=', $category_query_string)[1];
        $wholesale_cost = explode('=', $wholesale_cost_query_string)[1];
        $retail_price = explode('=', $retail_price_query_string)[1];
        $search = explode('=', $search_query_string)[1];
        
        $where_clause = ["brand = ".$brand, "product.vendor_id = ".$vendor, "status_code = ".$status, "category = ".$category, "wholesale_cost ".$wholesale_cost, "retail_price ".$retail_price, "product.name LIKE CONCAT('%', '".$search."', '%');"];
        
        $delimeter = implode(" AND ", $where_clause);
        $delimeter = " WHERE ".$delimeter;
        echo '<script>console.log("'.$delimeter.'");</script>';
        getInventory($delimeter);
    }
}
function getInventory($delimeter) {
    $database = new DB();
    //OR...
    $database = DB::getInstance();

    $query = "select product_id, brand, product.name as name, vendor.name as vendor, status_code, size, wholesale_cost, retail_price, quantity, upc_code from product inner join vendor on(product.vendor_id = vendor.vendor_id)".$delimeter.";";
    $results = $database->get_results( $query );
    foreach( $results as $row ) {
        echo '  <tr>
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
?>