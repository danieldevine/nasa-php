<?php

namespace Coderjerk\NasaPhp;

use Coderjerk\NasaPhp\Request;
use stdClass;

/**
 * Retrieves near earth Asteroid information.
 */
class NeoW
{

    public static $uri = 'neo/rest/v1/';


    /**
     * Retrieves a list of Asteroids based
     * on their closest approach date to Earth.
     *
     * @param String YYYY-MM-DD $start_date
     * @param String YYYY-MM-DD $end_date
     * @return Object
     */
    public function getAsteroidFeed($start_date, $end_date)
    {
        $params = [
            'start_date' => $start_date,
            'end_date' => $end_date
        ];

        $request = new Request;
        return $request->makeRequest('GET', self::$uri . 'feed', $params);
    }

    /**
     * Looks up a specific Asteroid based on
     * its NASA JPL small body (SPK-ID) ID
     *
     * @param String $asteroid_id
     * @return Object
     */
    public function getAsteroidById($asteroid_id)
    {
        $request = new Request;

        $params = [
            'asteroid_id' => $asteroid_id
        ];

        return $request->makeRequest('GET', self::$uri . 'neo/' . $asteroid_id, $params);
    }

    /**
     * Retrieves only potentially hazardous asteroids.
     *
     * @param String YYY-MM-DD $start_date
     * @param String YYY-MM-DD $end_date
     * @return Object
     */
    public function getPotentiallyHazardousAsteroids($start_date, $end_date)
    {
        $potentiallyHazardous = new stdClass;

        $asteroids = $this->getAsteroidFeed($start_date, $end_date);
        $near = $asteroids->near_earth_objects;

        foreach ($near as $key => $value) {
            $hazardous = array_filter($value, function ($item) {
                return $item->is_potentially_hazardous_asteroid == true;
            });

            $potentiallyHazardous->$key = $hazardous;
        }

        $asteroids->near_earth_objects = $potentiallyHazardous;
        return $asteroids;
    }
}