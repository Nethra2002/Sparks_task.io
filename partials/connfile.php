<?php
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "bankingdatabase";

$conn = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_database);

if(!$conn){
    die("Error". mysqli_connect_error());
}
?>