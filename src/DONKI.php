<?php

namespace Coderjerk\NasaPhp;

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
class DONKI
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
            'start_date' => $this->dates['start_date'],
            'end_date' => $this->dates['end_date']
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
            'startDate' => $this->dates['start_date'],
            'endDate' => $this->dates['end_date'],
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