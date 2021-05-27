<?php

require 'connect.php';

$userId = uniqid();

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$fullname = $fname . " " . $lname;


$email = $_POST['email'];

$phone = $_POST['phone'];

$town = $_POST['town'];

$password = $_POST['password'];

$postalAddress = $_POST['postalAddress'];

$idNo = $_POST['idNo'];

$dob = $_POST['dob'];

$password = password_hash($password, PASSWORD_DEFAULT);

// check if user exists 
$sel = "SELECT * FROM public WHERE email='$email'";

$selQuery = mysqli_query($con, $sel);

$res = new stdClass();

if ($u = mysqli_fetch_assoc($selQuery)) {

    $res->success = false;

    $res->message = "The Email Is Already Registered";
} else {

    // insert 

    $status = 'active';

    $insert = "INSERT INTO public (userId,fullname,email,phone,town,postalAddress,dob,idNo,password,status) 
    
    VALUES ('$userId','$fullname','$email','$phone','$town','$postalAddress','$dob','$idNo','$password','$status')";


    if (mysqli_query($con, $insert)) {

        $res->success = true;

        $res->userId = $userId;


        $res->message = "User Registration Successful, Login To Continue";
    } else {

        $res->success = false;

        $res->message = mysqli_error($con);
    }
}


echo json_encode($res);
