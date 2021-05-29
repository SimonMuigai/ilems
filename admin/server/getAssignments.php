<?php

require 'connect.php';

$sel = "SELECT DISTINCT caseId FROM assignments";

$selQuery = mysqli_query($con, $sel);

$cases = [];

while ($r = mysqli_fetch_assoc($selQuery)) {

    $case = new stdClass();


    $caseId = $r['caseId'];

    // $assignmentId=$r['assignmentId'];

    // get the case filer 
    $selu = "SELECT * FROM cases WHERE obNo='$caseId'";

    $seluQuery = mysqli_query($con, $selu);

    if ($u = mysqli_fetch_assoc($seluQuery)) {

        $case->fullname = $u['fullname'];
    } else {

        $case->fullname = "N/A";
    }

    // get the users assiged ;

    $officers = '';

    $selo = "SELECT * FROM assignments WHERE caseid='$caseId'";

    $seloQuery = mysqli_query($con, $selo);

    while ($o = mysqli_fetch_assoc($seloQuery)) {

        $officer = $o['police'];

        $officers = $officers . "," . $officer;
    }


    $lawyers = '';

    $selo = "SELECT * FROM assignments WHERE caseid='$caseId'";

    $seloQuery = mysqli_query($con, $selo);

    while ($o = mysqli_fetch_assoc($seloQuery)) {

        $lawyer = $o['lawyer'];

        if ($lawyer == null) {
        } else {

            $lawyers = $lawyers . "," . $lawyer;
        }
    }


    $case->obNo = $caseId;

    $case->officers = $officers;

    $case->lawyers = $lawyers;

    $caseId = urlencode($caseId);

    $case->view = "<a href='assignment?a=" . $caseId . "'>View</a>";



    array_push($cases, $case);
}


echo json_encode($cases);
