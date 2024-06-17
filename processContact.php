<?php
// Connecting to the database
require_once("db_connect.php");

// creating the query for insertion
$query="INSERT INTO registration(FirstName, SecondName,Telephone, Email) VALUES(?,?,?,?)";

// prepared statement
$stmt = mysqli_prepare($con,$query);

// Validating if connection and prepared statements are correct
if(!$stmt){
    echo "Prepared statement failed" .mysqli_error($con);
}

// Get form items when the form is submitted
$f=$_POST['fname'];
$s=$_POST['sname'];
$e=$_POST['email'];
$t=$_POST['telephone'];

// Binding variables with database names or columns
mysqli_stmt_bind_param($stmt, "ssss",$f,$s,$e,$t);
if(mysqli_stmt_execute($stmt)){
    echo "Data inserted successfully";
}
else{
    echo "Your have errors in your form". mysqli_error($con);
}








?>