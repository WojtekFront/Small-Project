<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "formdb";

//new connection
//$db_conn = new PDO("mysql:host=".$dbServerName.";dbname=".$dbName,$dbUserName,$dbPassword);


//old connection
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

?>