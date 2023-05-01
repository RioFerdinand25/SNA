<?php
    $servername = "172.20.0.3";
    $username = "root";
    $password = "root";
    $dbname = "redlock";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT id, nama, alamat, jabatan FROM users";
    $result = $conn->query($sql);
    echo "$result->num_rows";
    echo "<br> <br>";
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " " . $row["alamat"]. " " . $row["jabatan"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>