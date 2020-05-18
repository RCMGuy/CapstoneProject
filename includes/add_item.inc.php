<?php

//include connect to database
include_once 'dbh.inc.php';

//get the form inputs
$inputDate = $_POST['date'];
$inputName = $_POST['name'];
$inputWeight = $_POST['weight'];
$inputCost = $_POST['cost'];
$inputMarkup = $_POST['markup'];

//the sql to run
$sql = "";

//running the sql
$query = mysqli_query($conn, $sql);

//take me home
header("Location: ../index.php?signup=success");

?>