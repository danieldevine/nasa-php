<?php

namespace Coderjerk\NasaPhp\DONKI\Tests;

use Coderjerk\NasaPhp\DONKI\WSAEnlilSimulation;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class WSAEnlilSimulationTest extends TestCase
{
    public function testGetWSAEnlilSimulation()
    {
        $solar = new WSAEnlilSimulation();
        $test = $solar->getWSAEnlilSimulation();
        assertIsArray($test);
    }
}
