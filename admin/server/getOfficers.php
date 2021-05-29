<?php

require 'connect.php';

$sel = "SELECT * FROM police ORDER BY name ASC";

$selQuery = mysqli_query($con, $sel);

$officers = [];

$no = 1;


while ($s = mysqli_fetch_assoc($selQuery)) {

    $officer = new stdClass();

    $officer->no = $no;

    $id = $s['policeId'];

    $officer->name = $s['name'];
    $officer->phone = $s['phone'];

    $officer->email = $s['email'];

    $officer->station = $s['station'];

    $officer->view = "<a href='officer?s=" . $id . "'>View</a>";

    array_push($officers, $officer);

    $no = $no + 1;
}


echo json_encode($officers);
