<?php

require 'connect.php';

// get sent data 
$userId = $_COOKIE['ilems_lia'];


$res = new stdClass();


// get details 
$sel = "SELECT * FROM admins WHERE adminId='$userId'";

$selQuery = mysqli_query($con, $sel);

if ($u = mysqli_fetch_assoc($selQuery)) {

    $res->exists = true;

    $res->name = $u['name'];

    $res->phone = $u['phone'];

    $res->email = $u['email'];

    $res->email = $u['added'];

    $res->status = $u['status'];

    $res->contributions = [];
} else {

    $res->exists = false;
}


echo json_encode($res);
