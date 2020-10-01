<?php
require 'config.php';
$sql = "insert into users (name, address, phone, age) values ('saurabh','mnr','9800000000','20'),('saurabh1','mnr','9800000000','20'),('saurabh10','mnr','9800000000','20')";
$result = $conn->query($sql);
if ($result===true){
	echo "success";
	} else {
	echo "Failure" . $conn->connect_failed;
	}
$conn->close();
?>