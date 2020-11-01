<?php

namespace Coderjerk\NasaPhp\DONKI\Tests;

use Coderjerk\NasaPhp\DONKI\Notifications;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class NotificationsTest extends TestCase
{
    public function testGetNotifications()
    {
        $solar = new Notifications();
        $test = $solar->getNotifications();
        assertIsArray($test);
    }
}
