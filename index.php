<?php
require_once('bootstrap.php');

use Coderjerk\NasaPhp\APOD;
use Coderjerk\NasaPhp\NeoW;
use Coderjerk\NasaPhp\DONKI;

// $apod = new APOD;
$date = date('Y-m-d');
$start_date = date('Y-m-d', strtotime('-7 days'));

// $result = $apod->getApod($date, false);
// d($result);

// $neow = new NeoW;


// $result = $neow->getAsteroidFeed($start_date, $date);
// d($result);

// $result = $neow->getPotentiallyHazardousAsteroids($start_date, $date);
// d($result);

// $single = $neow->getAsteroidById('54075541');
// d($single);

$dates = [
    'start_date' => $start_date,
    'end_date' => $date
];

$donki = new DONKI($dates);

$donk = $donki->getCoronalMassEjectionAnalysis();
d($donk);