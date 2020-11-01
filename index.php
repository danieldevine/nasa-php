<?php
require_once('bootstrap.php');

use Coderjerk\NasaPhp\APOD;
use Coderjerk\NasaPhp\NeoW;
use Coderjerk\NasaPhp\DONKI\CoronalMassEjection;
use Coderjerk\NasaPhp\DONKI\InterplanetaryShock;
use Coderjerk\NasaPhp\DONKI\GeomagneticStorm;
use Coderjerk\NasaPhp\Tests\InterplanetaryShockTest;

$apod = new APOD;

$result = $apod->getRandomApod();
d($result);

// $neow = new NeoW;


// $result = $neow->getAsteroidFeed($start_date, $date);
// d($result);

// $result = $neow->getPotentiallyHazardousAsteroids($start_date, $date);
// d($result);

// $single = $neow->getAsteroidById('54075541');
// d($single);

// $dates = [
//     'start_date' => $start_date,
//     'end_date' => $date
// ];

// $donki = new CoronalMassEjection($dates);

// $donk = $donki->getCoronalMassEjectionAnalysis();
// d($donk);

// $geomag = new GeomagneticStorm();
// $test = $geomag->getGeomagneticStorm();

// d($test);
$params = [
    'location' => 'Earth',
];

$ishock = new InterplanetaryShock;
$test = $ishock->getInterplanetaryShock($params);
d($test);