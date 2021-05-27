<?php
$servername = "localhost";
$policename = "root";
$password = "";
$db="ilems_db";

// Create connection
$con = mysqli_connect($servername, $policename, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
