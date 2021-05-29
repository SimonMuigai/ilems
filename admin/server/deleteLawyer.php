<?php

require 'connect.php';

$oid = $_POST['oid'];

// echo "An Error Occurred While Performing The Request. Try Again Later";
$delete = "DELETE FROM lawyers WHERE lawyerId='$oid'";

if (mysqli_query($con, $delete)) {

    echo "Lawyer Deleted Successfully";
} else {

    echo mysqli_error($con);
}
