<?php

require 'connect.php';

$name =addslashes( $_POST['name']);

$county = addslashes($_POST['county']);



$location = $_POST['location'];

$phone = $_POST['phone'];

// 
$code = substr(str_shuffle('1234567890ASDFGHJKLQWERTYUIOPZXCVBNM'), 0, 5);

$id = uniqid();

$status = "active";

// 

$sel = "SELECT * FROM stations WHERE name='$name' AND location='$location'";

$selQuery = mysqli_query($con, $sel);

if ($s = mysqli_fetch_assoc($selQuery)) {

    echo "Station Already Exists";
} else {

    $insert = "INSERT INTO stations (stationId,name,code,location,county,phone,status) 
    
    VALUES ('$id','$name','$code','$location','$county','$phone','$status')";


    if (mysqli_query($con, $insert)) {
        

        echo "Station Added Successfully";
    } else {

        echo mysqli_error($con);
    }
}
