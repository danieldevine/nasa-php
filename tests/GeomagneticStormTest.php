<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI\GeomagneticStorm;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;


class GeomagneticStormTest extends TestCase
{
    public function testGeomagneticStorm()
    {
        $end_date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-100 days'));

        $params = [
            'startDate' => $start_date,
            'endDate' => $end_date
        ];

        $geomag = new GeomagneticStorm();
        $test = $geomag->getGeomagneticStorm($params);
        assertIsArray($test);
    }
}