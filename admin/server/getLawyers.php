<?php

require 'connect.php';

$sel = "SELECT * FROM lawyers ORDER BY name ASC";

$selQuery = mysqli_query($con, $sel);

$lawyers = [];

$no = 1;


while ($s = mysqli_fetch_assoc($selQuery)) {

    $lawyer = new stdClass();

    $lawyer->no = $no;

    $id = $s['lawyerId'];

    $lawyer->name = $s['name'];
    $lawyer->phone = $s['phone'];

    $lawyer->email = $s['email'];

    $lawyer->view = "<a href='lawyer?l=" . $id . "'>View</a>";

    array_push($lawyers, $lawyer);

    $no = $no + 1;
}


echo json_encode($lawyers);
