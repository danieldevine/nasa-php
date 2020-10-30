<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\NeoW;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsObject;

class NeoWTest extends TestCase
{
    public function testGetAsteroidsFeed()
    {
        $start_date = date('Y-m-d', strtotime('-7 days'));
        $end_date = date('Y-m-d');

        $neow = new NeoW;
        $test = $neow->getAsteroidFeed($start_date, $end_date);

        assertIsObject($test);
    }

    public function testGetAsteroidById()
    {
        $asteroid_id = '3542519';

        $neow = new NeoW;
        $test = $neow->getAsteroidById($asteroid_id);

        assertIsObject($test);
    }

    public function testGetPotentiallyHazardousAsteroids()
    {
        $start_date = date('Y-m-d', strtotime('-7 days'));
        $end_date = date('Y-m-d');

        $neow = new NeoW;
        $result = $neow->getPotentiallyHazardousAsteroids($start_date, $end_date);

        assertIsObject($result);
    }
}