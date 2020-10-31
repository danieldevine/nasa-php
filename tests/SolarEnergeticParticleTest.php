<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI\SolarEnergeticParticle;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNull;

class SolarEnergeticParticleTest extends TestCase
{
    public function testGetSolarEnergeticParticle()
    {

        $solar = new SolarEnergeticParticle();
        $test = $solar->getSolarEnergeticParticle();
        //endpoint appears to be broken on NASA side. Expect null for now.
        assertNull($test);
    }
}