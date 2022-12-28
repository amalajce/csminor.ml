<?php
$servername = "localhost";
$username = "csminor_root";
$password = "csminor123";
$database = "csminor_db";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}