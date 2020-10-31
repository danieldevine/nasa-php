<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI\MagnetopauseCrossing;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNull;

class MagnetopauseCrossingTest extends TestCase
{
    public function testGetMagnetopauseCrossing()
    {
        $solar = new MagnetopauseCrossing();
        $test = $solar->getMagnetopauseCrossing();
        //endpoint appears to be broken on NASA side. Expect null for now.
        assertNull($test);
    }
}