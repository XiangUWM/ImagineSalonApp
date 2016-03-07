<?php
$db_path = 'config/db/db.php';
$home_path = 'app/view/pages/home.php';
if (file_exists($db_path)) {
    require($db_path);
    echo '<script>console.log("database connected");</script>';
    if (file_exists($home_path)) {
        require($home_path);
        echo '<script>console.log("home page found");</script>';
    } else {
        echo '<script>console.log("home page is not found");</script>';
    }
} else {
        echo '<script>console.log("database is not connected");</script>';
}
?>
