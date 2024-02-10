<?php
$host = "localhost";
$user = "as21249";
$pass = "dxV5FugnwDbPf";
$database = "ce154";

// Connecting using MySQLi
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
