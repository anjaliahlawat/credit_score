<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name="credit_score_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $credit_score_system);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>