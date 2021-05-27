<?php

require 'connect.php';

// get sent data 
$userId = $_POST['user'];


$res = new stdClass();


// get details 
$sel = "SELECT * FROM public WHERE userId='$userId'";

$selQuery = mysqli_query($con, $sel);

if ($u = mysqli_fetch_assoc($selQuery)) {

    $res->exists = true;

    $res->name = $u['fullname'];

    $res->phone = $u['phone'];

    $res->email = $u['email'];

    $res->town = $u['town'];

    $res->dob = $u['dob'];

    $res->idNo = $u['idNo'];


    $res->contributions = [];
} else {

    $res->exists = false;
}


echo json_encode($res);
