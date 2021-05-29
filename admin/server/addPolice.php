<?php

require 'connect.php';


$name = $_POST['name'];

$gender = $_POST['gender'];

$station = $_POST['station'];

$phone = $_POST['phone'];

$email = $_POST['email'];

$address = $_POST['address'];

$station = $_POST['station'];

$workId = $_POST['workId'];

$password = 1234;

$id = uniqid();

$status = "active";

// check if exisst 
$sel = "SELECT * FROM police WHERE workId='$workId'";

$selQuery = mysqli_query($con, $sel);


if ($u = mysqli_fetch_assoc($selQuery)) {

    echo "This Officer Is Already Registered";
} else {

    // insert 
    $insert = "INSERT INTO police (policeId,name,email,phone,gender,workId,address,station,password,status) 
    
    VALUES ('$id','$name','$email','$phone','$gender','$workId','$address','$station','$password','$status')";


    if (mysqli_query($con, $insert)) {

        echo "Officer Added Successfully";
        
    } else {

        echo mysqli_error($con);
    }
}
