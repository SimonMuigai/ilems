<?php

require 'connect.php';


$sel = "SELECT * FROM cases ORDER BY id DESC";

$selQuery = mysqli_query($con, $sel);

$cases = [];

$no = 1;

while ($r = mysqli_fetch_assoc($selQuery)) {

    $case = new stdClass();

    $case->no = $no;

    $caseId = $r['caseId'];

    $case->obNo = $r['obNo'];

    $case->added = $r['addedOn'];

    $case->title = $r['title'];

    $case->status = $r['status'];


    $case->view = "<a href='case?c=" . $caseId . "'>View</a>";


    $no = $no + 1;

    array_push($cases, $case);
}


echo json_encode($cases);
