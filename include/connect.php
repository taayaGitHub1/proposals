<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eco_planet";

$conn = new mysqli('localhost', 'root', '', 'eco_planet');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
