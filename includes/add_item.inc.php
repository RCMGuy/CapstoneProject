<?php

//include connect to database
include_once 'dbh.inc.php'; //great time-saver technique for inserting values in database - Riley

//get the form inputs
$inputDate = $_POST['date']; //great naming convetion for user to identify what input is what. - Riley
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
