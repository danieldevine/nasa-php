<?php

namespace Coderjerk\NasaPhp\Tests;

use Coderjerk\NasaPhp\DONKI;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class DONKITest extends TestCase
{
    public function testGetCoronalMassEjection()
    {
        // $apod = new APOD;
        $date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-7 days'));

        $dates = [
            'start_date' => $start_date,
            'end_date' => $date
        ];

        $donki = new DONKI($dates);
        $cme =  $donki->getCoronalMassEjection();

        assertIsArray($cme);
    }

    public function testGetCoronalMassEjectionAnalysis()
    {
        // $apod = new APOD;
        $date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-10 days'));

        $dates = [
            'start_date' => $start_date,
            'end_date' => $date
        ];

        $donki = new DONKI($dates);
        $cmeA =  $donki->getCoronalMassEjectionAnalysis();

        assertIsArray($cmeA);
    }
}