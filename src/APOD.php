<?php

namespace Coderjerk\NasaPhp;

use Coderjerk\NasaPhp\Request;

/**
 * Retrieves data from the NASA
 * 'Astrology Picture of the Day' endpoint.
 *
 * @author Dan Devine <jerk@coderjerk.com>
 * @since 1.0.0
 */
class APOD
{
    public static $uri = 'planetary/apod';

    /**
     * Retrieves an image and image data for a given date.
     *
     * @param String $date formatted YYYY-MM-DD
     * @param Boolean $hd
     * @return Object
     */
    public function getApod($date, $hd = false)
    {
        $date ? $date = $date : $date = date('Y-m-d');

        $params = [
            'date' => $date,
            'hd'   => $hd
        ];

        $request = new Request();
        return $request->makeRequest('GET', self::$uri, $params);
    }

    /**
     * Grabs a random Pic of the day.
     *
     * @return Object
     */
    public function getRandomApod()
    {
        $first_apod = 1420070400; // 01/01/2015
        $last_apod = time();
        $random_timestamp = mt_rand($first_apod, $last_apod);
        $date = date('Y-m-d', $random_timestamp);

        $random_apod =  $this->getApod($date, false);
        return $random_apod;
    }
}