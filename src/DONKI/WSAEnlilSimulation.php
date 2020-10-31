<?php

namespace Coderjerk\NasaPhp\DONKI;

use Coderjerk\NasaPhp\Request;

class WSAEnlilSimulation

{
    public static $uri = 'DONKI/WSAEnlilSimulations';

    public function getWSAEnlilSimulation($params = [])
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