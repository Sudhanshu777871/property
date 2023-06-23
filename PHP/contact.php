
<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['phone'];
$msg = $_POST['msg'];

// Insert data into the database (replace with your own database connection code)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lkopropertywale";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `contactdata` (`S.No`, `Name`, `Phone`, `Message`, `DateTime`) VALUES (NULL, '$name', '$email', '$msg', current_timestamp());";

if ($conn->query($sql) === TRUE) {
    echo "Message Sent, We Get Back Soon...";
} else {
    echo "Some Error Occured, Please Try Again...";
}

$conn->close();
?>
