<?php 
session_start();
$mysqli = new mysqli("vivekweb.mysql.database.azure.com", "vivek", "Gayan@29120402", "vivek");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>

