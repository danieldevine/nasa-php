<?php

namespace Coderjerk\NasaPhp\DONKI;

use Coderjerk\NasaPhp\Request;

class RadiationBeltEnhancement
{
    public static $uri = 'DONKI/RBE';


    public function getRadiationBeltEnhancement($params = [])
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