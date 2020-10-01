<?php
$serverName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'test';
$conn = new mysqli($serverName,$username,$password,$dbName);
if ($conn->connect_error){
	die ("Connection error" . $conn->connect_error);
}
?>