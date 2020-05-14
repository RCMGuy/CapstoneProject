<?php

$dbServer = "localhost";
$dbUser = "root";
$dbpassword = "";
$dbName = "testing";

$conn = mysqli_connect($dbServer, $dbUser, $dbpassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>