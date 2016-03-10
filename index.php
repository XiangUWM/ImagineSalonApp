<?php
$db_path = 'config/db/db.php'; // path to database configuration
$main_path = 'app/view/pages/main.php'; // path to main HTML document
if (file_exists($db_path)) { // if the database configuration file exists...
    
    require($db_path); // load the database configuration file.
    echo '<script>console.log("database connected");</script>'; // echo a JavaScript console log confirmation upon success.
    
    if (file_exists($main_path)) { // if the main HTML document also exists...
        require($main_path); // load the main HTML document.
        echo '<script>console.log("home page found");</script>'; // echo a JavaScript console log confirmation upon success.
    } else {
        echo '<script>console.log("home page is not found");</script>'; // echo an error statement to the console log upon failure to establish main HTML document.
    }
} else {
        echo '<script>console.log("database is not connected");</script>'; // echo an error statement to the console log upon failure to establish connection with the database. 
}
?>