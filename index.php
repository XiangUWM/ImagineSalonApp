<?php

$path = 'config/db/db.php';
if (file_exists($path)) {
    require($path);
    echo '<script>console.log("database connected");</script>';
} else {
        echo '<script>console.log("database is not connected");</script>';
}
?>
<a href="app/view/pages/test.php">Click here for test output from database</a>