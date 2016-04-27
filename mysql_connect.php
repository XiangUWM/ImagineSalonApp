<?php # Script - mysqli_connect.php



//This file contains the database access information.

//This file also establishes a connection to MySQL



//Make the connection. 

$dbc = @mysql_connect ("localhost", "root", "siC10Ne.dr4mp")

OR die ('Could not connect to MySQL: ' . mysql_error());



//Select the database (Change your db_name).

@mysql_select_db("imagine_salon")



or die ('Could not select the database: ' . mysql_error());



?>