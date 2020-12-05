<?php
  $servername = "us-cdbr-east-02.cleardb.com";
  $username = "b0d2f2f1e6f08b";
  $password = "0341d132";
  $dbname = "heroku_8a672235ee8ac2f";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT username, password FROM users;";


  $result = $conn->query($sql);
  echo '<table align="center" border="lpx" style="width:600px; line-height:40px;"> <tr> <th colspan="2"><h2>Users Record</h2></th> </tr> <t> <th> Username </th> <th> Password </th> </t>';
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr> <td>" . $row["username"]. "</td> <td>" . $row["password"]."</td> </tr>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>