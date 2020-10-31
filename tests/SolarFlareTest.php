<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI\SolarFlare;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNull;

class SolarFlareTest extends TestCase
{
    public function testGetSolarFlare()
    {
        $solar = new SolarFlare();
        $test = $solar->getSolarFlare();
        //endpoint appears to be broken on NASA side. Expect null for now.
        assertNull($test);
    }
}