<?php 
//connect to db
$servername = "185.224.137.5";
$username = "u219831890_ketobeheer";
$password = "Admin_admin1";
$databaseName = "u219831890_ketomed";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databaseName);
// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error(); 
}
?>