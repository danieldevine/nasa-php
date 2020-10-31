<?php

namespace Coderjerk\NasaPhp\DONKI;

use Coderjerk\NasaPhp\Request;

/**
 * Retrieves data from the Space Weather Database Of
 * Notifications, Knowledge, Information (DONKI).
 *
 * https://ccmc.gsfc.nasa.gov/donki/
 *
 * @author Dan Devine <jerk@coderjerk.com>
 * @since 1.0.0
 */
class CoronalMassEjection
{
    /**
     * shared uri
     *
     * @var string
     */
    public static $uri = 'DONKI';

    /**
     *
     * @param Array $dates
     */
    public function __construct($dates)
    {
        $this->dates = $dates;
    }

    /**
     * A coronal mass ejection (CME) is a significant
     * release of plasma and accompanying magnetic field
     * from the solar corona.
     *
     * @return Object
     */
    public function getCoronalMassEjection()
    {
        $params = [
            'startDate' => $this->dates['startDate'],
            'endDate' => $this->dates['endDate']
        ];

        $uri = self::$uri  . '/CME';

        $request = new Request;
        return $request->makeRequest('GET', $uri, $params);
    }

    /**
     * Not 100% sure what the distinctions are
     * between this endpoint and the one above,
     * please drop a mail to jerk@coderjerk.com if you know.
     *
     * @param Array $params
     * @return Object
     */
    public function getCoronalMassEjectionAnalysis($params = [])
    {
        $default_params = [
            'startDate' => $this->dates['startDate'],
            'endDate' => $this->dates['endDate'],
            'mostAccurateOnly' => true,
            'completeEntryOnly' => true,
            'speed' => 0, //lower limit
            'halfAngle' => 0, //lower limit
            'catalog' => 'ALL', // ALL, SWRC_CATALOG, JANG_ET_AL_CATALOG
            'keyword' => 'NONE'
        ];

        $params = array_merge($default_params, $params);

        $uri = self::$uri  . '/CMEAnalysis';
        $request = new Request;

        return $request->makeRequest('GET', $uri, $params);
    }
}