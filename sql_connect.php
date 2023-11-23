<?php
$host = 'localhost';
$username = 'root';
$password = '123456789';

$con = new mysqli($host, $username, $password);

if (mysqli_connect_errno()) {
  echo "connection failed: {$con->connect_error}";
}