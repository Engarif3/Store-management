<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store_db";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 echo "Connected successfully <br>";

?>