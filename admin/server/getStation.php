<?php

require 'connect.php';

$sid = $_POST['sid'];


$sel = "SELECT * FROM stations WHERE stationId='$sid'";

$selQuery = mysqli_query($con, $sel);

$res = new stdClass();

if ($s = mysqli_fetch_assoc($selQuery)) {

    $res->name = $s['name'];

    $res->location = $s['location'];

    $res->county = $s['county'];

    $res->code = $s['code'];

    $res->phone = $s['phone'];
}


echo json_encode($res);
