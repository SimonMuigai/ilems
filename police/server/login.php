<?php
// require connection
require 'connect.php';

//result object
$resObj = new stdClass();

// echo 'success';
$email = $_POST['email'];
$password = $_POST['password'];

//check policeExist
$checkExists = "SELECT * FROM police WHERE email='$email'";

// query
$checkExistsQuery = mysqli_query($con, $checkExists);

// fetch
if ($row = mysqli_fetch_assoc($checkExistsQuery)) {
    //exists
    $resObj->exists = true;
    // policeid
    $resObj->policeId = $row['policeId'];

    // stored password
    $hashedPass = $row['password'];
    //verify pass


    if ($password==$hashedPass) {
        // they match
        $resObj->login = true;

        $resObj->message="police Login Successfull";

    } else {
        // they dont match
        $resObj->login = false;

        $resObj->message = "Incorrect Email Or Password";
    }
} else {
    //no such admin
    $resObj->exists = false;

    $resObj->message = "The police does not exist";
}

//encode to json and echo the json
echo json_encode($resObj);
