<?php
//echo"Today is". date("l,F,j,Y")  . "<br>";

$host = "localhost:3306";
$user = "root";
$pass = "1234";
$db   = "pro";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->concdnect_error);
}

echo "Connected successfully to MariaDB";

$conn->close();
?>
cd