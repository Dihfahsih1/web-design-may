<?php
$db_user="root";
$db_host="localhost";
$db_pass="";
$db_name= "students";
$db_port= 3306;

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);
if (!$con){
    die("Couldn't connect to the database".mysqli_connect_error());
}

?>