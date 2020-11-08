<?php

namespace Coderjerk\NasaPhp;

use Coderjerk\NasaPhp\Request;

class Earth
{
    public static $uri = 'planetary/earth/';

    public function getEarth($params, $endpoint)
    {
        $uri = self::$uri . $endpoint;
        $request = new Request;
        return $request->makeRequest('GET', $uri, $params);
    }
}