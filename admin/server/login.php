<?php

// require connection
require 'connect.php';

date_default_timezone_set('Africa/Nairobi');

//result object
$resObj = new stdClass();

// echo 'success';
$username = $_POST['username'];
$password = $_POST['password'];


//check userExist
$checkExists = "SELECT * FROM admins WHERE username='$username'";

// query
$checkExistsQuery = mysqli_query($con, $checkExists);

// fetch
if ($row = mysqli_fetch_assoc($checkExistsQuery)) {
    //exists
    $resObj->exists = true;
    // userid
    $resObj->adminId = $row['adminId'];

    // stored password
    $hashedPass = $row['password'];
    //verify pass
    if (password_verify($password, $hashedPass)) {
        // they match
        $resObj->login = true;

        // set the cookie 
        setcookie('ilems_lia', $resObj->adminId, time() + getTimeDifferenceBetweenNowAndMidnight(), "/");

        // add session 
    } else {
        // they dont match
        $resObj->login = false;
    }
} else {
    //no such admin
    $resObj->exists = false;
}

//encode to json and echo the json
echo json_encode($resObj);


function getTimeDifferenceBetweenNowAndMidnight()
{

    $now = time();

    // get the time of ooo 
    $today = date('Y-m-d', time());

    $midnight = $today . " 23:59:00";

    $midnight = strtotime($midnight);

    return intval(($midnight - $now));
}


