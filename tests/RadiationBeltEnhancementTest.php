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
        assertIsArray($test);
    }
}