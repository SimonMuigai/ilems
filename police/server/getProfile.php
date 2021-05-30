<?php

require 'connect.php';

// get sent data 
$policeId = $_POST['police'];


$res = new stdClass();


// get details 
$sel = "SELECT * FROM police WHERE policeId='$policeId'";

$selQuery = mysqli_query($con, $sel);

if ($u = mysqli_fetch_assoc($selQuery)) {

    $res->exists = true;

    $res->name = $u['name'];

    $res->phone = $u['phone'];

    $res->email = $u['email'];

    $res->workId = $u['workId'];

    $res->contributions = [];
} else {

    $res->exists = false;
}


echo json_encode($res);
