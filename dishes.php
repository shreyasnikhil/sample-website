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

$dish1 = $_POST['corn'];
$dish2 = $_POST['pulao'];
$dish3 = $_POST['bukhara'];
$dish4 = $_POST['bhalle'];
$dish5 = $_POST['chaat'];
$dish6 = $_POST['tikki'];
$dish7 = $_POST['litti'];
$dish8 = $_POST['Risottos'];
// database insert SQL code
$sql = "INSERT INTO dishinfo(dish1,dish2,dish3,dish4,dish5,dish6,dish7,dish8) VALUES ('$dish1','$dish2','$dish3','$dish4','$dish5','$dish6','$dish7','$dish8')";
if ($conn->query($sql) === TRUE) {
  header('Location: http://127.0.0.1:5500/Function%20Hall%20Booking%20System/pr2.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>