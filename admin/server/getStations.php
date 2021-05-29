<?php

require 'connect.php';

$sel = "SELECT * FROM stations ORDER BY name ASC";

$selQuery = mysqli_query($con, $sel);

$stations = [];

$no = 1;


while ($s = mysqli_fetch_assoc($selQuery)) {

    $station = new stdClass();

    $station->no = $no;

    $id = $s['stationId'];

    $station->name = $s['name'];

    $station->code = $s['code'];

    $station->location = $s['location'];

    $station->county = $s['county'];

    $station->view = "<a href='station?s=" . $id . "'>View</a>";

    array_push($stations, $station);

    $no = $no + 1;
}


echo json_encode($stations);
