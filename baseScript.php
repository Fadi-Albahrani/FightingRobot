<?php

$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "roboticarm";


// create connection to mySql
$conn = new mysqli($servername, $username, $password, $databaseName);

//check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {

  save($conn);
}


function save($conn)
{

$direction = $_GET['direction'];



$sql = "UPDATE robotDirection SET direction= '$direction'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully and the current direction is " . $direction;
  } else {
    echo "Error updating record: " . $conn->error;
  }


  
}