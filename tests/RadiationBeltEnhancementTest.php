<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI\RadiationBeltEnhancement;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class RadiationBeltEnhancementTest extends TestCase
{
    public function testGetRadiationBeltEnhancement()
    {

        $solar = new RadiationBeltEnhancement();
        $test = $solar->getRadiationBeltEnhancement();
        //endpoint appears to be broken on NASA side. Expect null for now.
        assertIsArray($test);
    }
}