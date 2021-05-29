<?php

require 'connect.php';


$name = $_POST['name'];

$phone = $_POST['phone'];

$email = $_POST['email'];

$address = $_POST['address'];

$workId = $_POST['workId'];

$password = 1234;

$id = uniqid();

$status = "active";

// check if exisst 
$sel = "SELECT * FROM lawyers WHERE workId='$workId'";

$selQuery = mysqli_query($con, $sel);


if ($u = mysqli_fetch_assoc($selQuery)) {

    echo "This Lawyer Is Already Registered";
} else {

    // insert 
    $insert = "INSERT INTO lawyers (lawyerId,name,email,phone,workId,address,password,status) 
    
    VALUES ('$id','$name','$email','$phone','$workId','$address','$password','$status')";


    if (mysqli_query($con, $insert)) {

        echo "Lawyer Added Successfully";
        
    } else {

        echo mysqli_error($con);
    }
}
