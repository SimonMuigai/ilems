<?php

require 'connect.php';


$caseId = $_POST['caseId'];

$status = "Closed";


$update = "UPDATE cases SET status='$status' WHERE caseId='$caseId'";

if (mysqli_query($con, $update)) {

    echo "Case Closed Successfully";
    
} else {

    echo mysqli_error($con);
}
