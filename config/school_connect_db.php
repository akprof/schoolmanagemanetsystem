<?php
/* Database config */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinpet_school_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>