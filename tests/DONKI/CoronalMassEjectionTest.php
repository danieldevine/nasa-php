<?php

namespace Coderjerk\NasaPhp\DONKI\Tests;

use Coderjerk\NasaPhp\DONKI\CoronalMassEjection;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class CoronalMassEjectionTest extends TestCase
{
    public function testGetCoronalMassEjection()
    {
        $date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-7 days'));

        $dates = [
            'startDate' => $start_date,
            'endDate' => $date
        ];

        $donki = new CoronalMassEjection($dates);
        $cme =  $donki->getCoronalMassEjection();

        assertIsArray($cme);
    }

    public function testGetCoronalMassEjectionAnalysis()
    {
        $date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-10 days'));

        $dates = [
            'startDate' => $start_date,
            'endDate' => $date
        ];

        $donki = new CoronalMassEjection($dates);
        $cmeA =  $donki->getCoronalMassEjectionAnalysis();

        assertIsArray($cmeA);
    }
}