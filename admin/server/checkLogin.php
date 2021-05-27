<?php


$res = new stdClass();

// check if the cookie is set 
## Author Vee

if (isset($_COOKIE['ilems_lia'])) {
    // the person is logged in 
    // logged in user 
    $loggedInUser = $_COOKIE['ilems_lia'];

    $res->loggedIn = true;

    // echo $loggedInUser;

} else {
    // the person is looged out 
    $res->loggedIn = false;
}


echo json_encode($res);