<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\Earth;
use PHPUnit\Framework\TestCase;
use Symfony\Component\VarDumper\Caster\ClassStub;

use function PHPUnit\Framework\assertIsObject;

class EarthTest extends TestCase
{

    public function testEarthImagery()
    {
        $earth = new Earth;
        $params = [
            'lat' => '1.5',
            'lon' => '100.75',
            'dim' => '0.1',
            'date' => '2014-02-01'
        ];

        $endpoint = 'imagery';


        $result = $earth->getEarth($params, $endpoint);
        assertIsObject($result);
    }

    public function testEarthAssets()
    {
        $earth = new Earth;
        $params = [
            'lat' => '29.78',
            'lon' => '-95.33',
            'dim' => '0.10',
            'date' => '2018-01-01'

        ];

        $endpoint = 'assets';

        $result = $earth->getEarth($params, $endpoint);
        assertIsObject($result);
    }
}