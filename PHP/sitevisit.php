<?php
// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = $_POST['date'];
$time = $_POST['time'];
// Insert data into the database (replace with your own database connection code)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lkopropertywale";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `sitevisitdata` (`S.No`, `Name`, `Phone`, `Address`, `Date`, `Time`, `DateTime`) VALUES (NULL, '$name', '$phone', '$address', '$date','$time',current_timestamp());";

if ($conn->query($sql) === TRUE) {
    echo "Your Site Visit Is Confirmed, You Get Call From Our Team ASAP...";
} else {
    echo "Some Error Occured, Please Try Again...";
}

$conn->close();

?>