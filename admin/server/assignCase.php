<?php

require 'connect.php';


$officer = $_POST['officer'];

$case = addslashes($_POST['obNo']);


// check if this user is assigned 
$sel = "SELECT * FROM assignments WHERE caseId='$case' AND police='$officer'";

$selQuery = mysqli_query($con, $sel);

if ($r = mysqli_fetch_assoc($selQuery)) {

    echo "The officer is already assigned the case";
} else {

    // insert 

    $id = uniqid();

    $status = "Active";

    $insert = "INSERT  INTO assignments (assignmentId,caseId,police,status) VALUES ('$id','$case','$officer','$status')";

    if (mysqli_query($con, $insert)) {


        $update = "UPDATE cases SET status='Open' WHERE obNo='$case'";

        if (mysqli_query($con, $update)) {

            echo "Case Assigned Successfully";

        } else {

            echo mysqli_error($con);
        }
    } else {

        echo mysqli_error($con);
    }
}
