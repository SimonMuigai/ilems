<?php
// require connection
require 'connect.php';

//result object
$resObj = new stdClass();

// echo 'success';
$email = $_POST['email'];
$password = $_POST['password'];

//check userExist
$checkExists = "SELECT * FROM public WHERE email='$email'";

// query
$checkExistsQuery = mysqli_query($con, $checkExists);

// fetch
if ($row = mysqli_fetch_assoc($checkExistsQuery)) {
    //exists
    $resObj->exists = true;
    // userid
    $resObj->userId = $row['userId'];

    // stored password
    $hashedPass = $row['password'];
    //verify pass
    if (password_verify($password, $hashedPass)) {
        // they match
        $resObj->login = true;

        $resObj->message="User Login Successfull";

    } else {
        // they dont match
        $resObj->login = false;

        $resObj->message = "Incorrect Email Or Password";
    }
} else {
    //no such admin
    $resObj->exists = false;

    $resObj->message = "The user does not exist";
}

//encode to json and echo the json
echo json_encode($resObj);
