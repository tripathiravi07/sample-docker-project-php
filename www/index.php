<?php
$mysqli = new mysqli("mydb","admin", "13dlql*41");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo "Connected successfully";
?>
