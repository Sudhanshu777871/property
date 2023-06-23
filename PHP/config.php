<?php
$servername="localhost";
$username="root";
$password="";
$databaseName="lkopropertywale";
//connecting to the database
$conn = mysqli_connect($servername,$username,$password,$databaseName);
if(!$conn){
    die("Connection Failed......");
}
?>