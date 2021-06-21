<!DOCTYPE html>
<html>

<head>
  <title>Database overview</title>
  <link rel="stylesheet" href="main.css" />
</head>

<body>

  <img class="img" src="logo.png" alt="logo">

  <table border="2" class="zui-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Status</th>
        <th>Degree</th>
      </tr>
    </thead>
    <tbody>


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

        $records = mysqli_query($conn, "select * from motors");

        while ($data = mysqli_fetch_array($records)) {
      ?>

          <tr>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['statuss']; ?></td>
            <td><?php echo $data['degree']; ?></td>
          </tr>


        <?php
        }
        ?>
    </tbody>
  </table>

<?php
      }
?>

</body>

</html>