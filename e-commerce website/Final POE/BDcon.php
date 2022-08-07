<?php

$con = mysqli_connect('localhost','root','');


// Create database
$sql = "CREATE DATABASE 18011644_Given_Mnguni";
if ($con->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $con->error;
}

$con->close();
?>