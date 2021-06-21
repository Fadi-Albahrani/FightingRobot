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


function updateDB($conn)
{
  $sql = "UPDATE motors SET degree='170' WHERE id=1";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

function save($conn)
{

  $motor1 =  $_GET['motor1'];
  $motor2 =  $_GET['motor2'];
  $motor3 =  $_GET['motor3'];
  $motor4 =  $_GET['motor4'];
  $motor5 =  $_GET['motor5'];
  $motor6 =  $_GET['motor6'];
  $onOff = $_GET['onOffButton'];

  mysqli_query($conn, "UPDATE motors SET degree= $motor1  WHERE id=1", 0);
  mysqli_query($conn, "UPDATE motors SET degree= $motor2  WHERE id=2", 0);
  mysqli_query($conn, "UPDATE motors SET degree= $motor3  WHERE id=3", 0);
  mysqli_query($conn, "UPDATE motors SET degree= $motor4  WHERE id=4", 0);
  mysqli_query($conn, "UPDATE motors SET degree= $motor5  WHERE id=5", 0);
  mysqli_query($conn, "UPDATE motors SET degree= $motor6  WHERE id=6", 0);
  mysqli_query($conn, "UPDATE motors SET statuss ='$onOff' ",0);

 echo "PHP code excuted please check the database or dbOverview.php file to see the changes";
  
}
