<?php

require 'connect.php';

$oid = $_POST['oid'];

$res = new stdClass();

$sel = "SELECT * FROM lawyers WHERE lawyerId='$oid'";

$selQuery = mysqli_query($con, $sel);

if ($r = mysqli_fetch_assoc($selQuery)) {

    $res->name = $r['name'];

    $res->address = $r['address'];

    $res->phone = $r['phone'];

    $res->email = $r['email'];

    $res->workId = $r['workId'];

}


echo json_encode($res);
