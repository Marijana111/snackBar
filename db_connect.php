<?php
$servername = "localhost";
$username = "test";
$password = "12345";
$dbname = "snackbar";
$conn = mysqli_connect($servername, $username, $password, $dbname) or 
die("Connection failed: " . mysqli_connect_error());
?>