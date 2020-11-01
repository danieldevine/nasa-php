<?php

namespace Coderjerk\NasaPhp\DONKI\Tests;

use Coderjerk\NasaPhp\DONKI\InterplanetaryShock;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class InterplanetaryShockTest extends TestCase
{
    public function testGetInterplanetaryShock()
    {
        $params = [
            'location' => 'Earth',
        ];

        $ipshock = new InterplanetaryShock();
        $test = $ipshock->getInterplanetaryShock($params);

        assertIsArray($test);
    }
}
