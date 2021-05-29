<?php

require 'connect.php';

$oid = $_POST['oid'];

// echo "An Error Occurred While Performing The Request. Try Again Later";
$delete = "DELETE FROM police WHERE policeId='$oid'";

if (mysqli_query($con, $delete)) {

    echo "Officer Deleted Successfully";
} else {

    echo mysqli_error($con);
}
