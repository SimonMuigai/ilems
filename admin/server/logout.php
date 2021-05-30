<?php

date_default_timezone_set('Africa/Nairobi');
 

setcookie('ilems_lia','', time() - getTimeDifferenceBetweenNowAndMidnight(), "/");

echo "Logged Out Successfully";

function getTimeDifferenceBetweenNowAndMidnight()
{

    $now = time();

    // get the time of ooo 
    $today = date('Y-m-d', time());

    $midnight = $today . " 23:59:00";

    $midnight = strtotime($midnight);

    return intval(($midnight - $now));
}

