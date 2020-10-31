<?php

namespace Coderjerk\NasaPhp\DONKI;

use Coderjerk\NasaPhp\Request;

class SolarFlare
{
    public static $uri = 'DONKI/FLR';

    /**
     * This Endpooint appears to no longer work as expected.
     * will return null.
     *
     * @param array $params
     * @return Object
     */
    public function getSolarFlare($params = [])
    {
        $end_date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-30 days'));

        $default_params = [
            'startDate' => $start_date,
            'endDate' => $end_date,
        ];

        $params = array_merge($default_params, $params);

        $uri = self::$uri;

        $request = new Request;
        return $request->makeRequest('GET', $uri, $params);
    }
}