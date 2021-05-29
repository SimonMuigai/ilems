<?php

require 'connect.php';


$aid = $_POST['aid'];

$aid = urldecode($aid);

$sel = "SELECT * FROM assignments WHERE caseId='$aid'";

$selQuery = mysqli_query($con, $sel);


$officers = [];

$case = new stdClass;

while ($r = mysqli_fetch_assoc($selQuery)) {


    $officer = $r['police'];

    // echo $officer;

    array_push($officers, $officer);
}


$case->obNo = $aid;


$case->officers = implode(",", $officers);


echo json_encode($case);
