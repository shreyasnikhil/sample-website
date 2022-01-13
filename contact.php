<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "functionhall";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$txtName = $_POST['Username'];
$txtEmail = $_POST['Email'];
$txtPhone = $_POST['contact'];
$txtBooked = $_POST['BookedOn'];
$txtPurpose = $_POST['purpose'];
// database insert SQL code
$sql = "INSERT INTO customerinfo(name,email, contact, bookingDate, Purpose) VALUES ( '$txtName', '$txtEmail', '$txtPhone', '$txtBooked','$txtPurpose')";
if ($conn->query($sql) === TRUE) {
  header('Location: http://127.0.0.1:5500/Function%20Hall%20Booking%20System/paymentForm.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>