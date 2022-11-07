<?php
$servername = "185.224.137.5";
$username = "u219831890_ketobeheer";
$password = "Admin_admin1";
$databaseName = "u219831890_ketomed";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
