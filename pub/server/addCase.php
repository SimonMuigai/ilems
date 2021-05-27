<?php

require 'connect.php';

$user = $_POST['user'];

$title = $_POST['title'];

$statement = $_POST['statement'];

$status = "Pending";

$caseId = md5('salt');

$obNo = addslashes("OB/" . substr(str_shuffle('1234567890ASDFGHJKLQWERTYUIOPZXCVBNM'), 0, 8));

// get user details 
$sel = "SELECT * FROM public WHERE userId='$user'";

$selQuery = mysqli_query($con, $sel);


if ($r = mysqli_fetch_assoc($selQuery)) {


    $fullname = $r['fullname'];

    $idNo = $r['idNo'];

    // check if case exists 
    $selc = "SELECT * FROM cases WHERE title='$title' AND userId='$user' AND status='pending'";

    $selcQuery = mysqli_query($con, $selc);

    if ($c = mysqli_fetch_assoc($selcQuery)) {

        echo "Case Already Logged & Pending";

    } else {

        // insert 
        $insert = "INSERT INTO cases (caseId,userId,fullname,obNo,statement,title,status) 
        
        VALUES ('$caseId','$user','$fullname','$obNo','$statement','$title','$status')";

        if (mysqli_query($con, $insert)) {

            echo "Case Added Successfully";
        } else {

            echo mysqli_error($con);
        }
    }
}
