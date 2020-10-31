<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI\HightSpeedStream;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class HightSpeedStreamTest extends TestCase
{
    public function testGetHightSpeedStream()
    {
        $solar = new HightSpeedStream();
        $test = $solar->getHightSpeedStream();
        assertIsArray($test);
    }
}