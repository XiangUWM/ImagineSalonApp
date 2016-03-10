<?php
$path = 'app/config/db/db.php';
if (file_exists($path)) {
    require($path);
    echo '<script>console.log("database connected");</script>';
}
?>