<?php
$servername = "localhost";
$username = "doadmin";
$password = "AVNS_0N9gP5SR7oF9mufVwnU";
$dbname = "smartintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>