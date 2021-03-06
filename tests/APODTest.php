<?php

namespace Coderjerk\NasaPhp\Tests;

use PHPUnit\Framework\TestCase;
use Coderjerk\NasaPhp\APOD;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertIsObject;
use function PHPUnit\Framework\assertObjectHasAttribute;

class APODTest extends TestCase
{
    public function testCheckUri()
    {
        $apod = new APOD;
        assertEquals($apod::$uri, 'planetary/apod');
    }

    public function testApodEndpoint()
    {
        $apod = new APOD;

        $date =
            date('Y-m-d', strtotime('-2 days'));
        $test = $apod->getApod($date);

        assertIsObject($test);
        assertObjectHasAttribute('title', $test);
    }

    public function testRandomApod()
    {
        $apod = new APOD;

        $result = $apod->getRandomApod();
        assertIsObject($result);
        assertObjectHasAttribute('media_type', $result);
    }
}