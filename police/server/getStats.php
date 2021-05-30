<?php

require 'connect.php';

$res = new stdClass();

$sel = "SELECT * FROM public";

$selQuery = mysqli_query($con, $sel);

$res->public = mysqli_num_rows($selQuery);



// 
$sel = "SELECT * FROM lawyers";

$selQuery = mysqli_query($con, $sel);

$res->lawyers = mysqli_num_rows($selQuery);

// plolice
$sel = "SELECT * FROM police";

$selQuery = mysqli_query($con, $sel);

$res->police = mysqli_num_rows($selQuery);



// all
$res->totalUsers = $res->public + $res->lawyers + $res->police;



// cases

$sel = "SELECT * FROM cases";

$selQuery = mysqli_query($con, $sel);

$res->cases = mysqli_num_rows($selQuery);



// assignments
$sel = "SELECT DISTINCT caseId FROM assignments";

$selQuery = mysqli_query($con, $sel);

$res->assignments = mysqli_num_rows($selQuery);


// stations
$sel = "SELECT * FROM stations";

$selQuery = mysqli_query($con, $sel);

$res->stations = mysqli_num_rows($selQuery);




echo json_encode($res);
