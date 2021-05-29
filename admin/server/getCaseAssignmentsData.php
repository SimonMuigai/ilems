<?php

require 'connect.php';


$obs = [];

$officers = [];

$sel = "SELECT * FROM cases WHERE status='Pending' OR status='Open'";

$selQuery = mysqli_query($con, $sel);

while ($c = mysqli_fetch_assoc($selQuery)) {

    array_push($obs, $c['obNo']);
}


$sel = "SELECT * FROM police";

$selQuery = mysqli_query($con, $sel);

while ($c = mysqli_fetch_assoc($selQuery)) {

    array_push($officers, $c['name']);
}


$res = new stdClass();

$res->cases = $obs;

$res->police = $officers;


echo json_encode($res);
