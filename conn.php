<?php
$servername = "localhost";
$username = "cyberdemo_root";
$password = "cyberdemo@2023";
$database = "cyberdemo_mcaajce";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}