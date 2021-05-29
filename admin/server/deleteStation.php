<?php

require 'connect.php';

$sid = $_POST['sid'];


$delete = "DELETE FROM stations WHERE stationId='$sid'";

if (mysqli_query($con, $delete)) {

    echo "Station Deleted Successfully";
} else {

    echo mysqli_error($con);
    
}
