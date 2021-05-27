<?php

require 'connect.php';

$caseId = $_POST['caseId'];

$sel = "SELECT * FROM cases WHERE caseId='$caseId'";

$selQuery = mysqli_query($con, $sel);

$res = new stdClass();

if ($c = mysqli_fetch_assoc($selQuery)) {

    $res->name = $c['fullname'];

    $res->obNo = $c['obNo'];

    $res->added = $c['addedOn'];

    $res->status = $c['status'];

    $res->title = $c['title'];

    $res->statement = $c['statement'];
}



echo json_encode($res);
