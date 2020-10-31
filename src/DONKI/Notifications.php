<?php

namespace Coderjerk\NasaPhp\DONKI;

use Coderjerk\NasaPhp\Request;

class Notifications

{
    public static $uri = 'DONKI/notifications';

    /**
     *
     *
     * @param array $params
     * @return void
     */
    public function getNotifications($params = [])
    {
        $end_date = date('Y-m-d');
        $start_date = date('Y-m-d', strtotime('-30 days'));

        $default_params = [
            'startDate' => $start_date,
            'endDate' => $end_date,
            'type'    => 'all' //' all, FLR, SEP, CME, IPS, MPC, GST, RBE, report
        ];

        $params = array_merge($default_params, $params);

        $uri = self::$uri;

        $request = new Request;
        return $request->makeRequest('GET', $uri, $params);
    }
}