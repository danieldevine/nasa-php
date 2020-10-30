<?php

namespace Coderjerk\NasaPhp;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Handles our requests to the NASA APIs.
 *
 * @author Dan Devine <jerk@coderjerk.com>
 */
class Request
{
    /**
     * @param String $httpMethod
     * @param String $uri
     * @param Array $params
     *
     * @return Object|Exception
     */
    public static function makeRequest($httpMethod, $uri, $params)
    {
        $nasa_key = $_ENV['NASA_API_KEY'];
        $params['api_key'] = $nasa_key;

        $client = new Client([
            'base_uri' => 'https://api.nasa.gov/'
        ]);

        try {
            $headers = [
                'Accept' => 'application/json',
            ];

            $request  = $client->request($httpMethod, $uri, [
                'query'   => $params,
                'headers' => $headers,
            ]);

            $body = $request->getBody()->getContents();
            $response = json_decode($body);
            return $response;
        } catch (ClientException $e) {
            d($e);
            d($e->getRequest()->getBody()->getContents());
            d($e->getResponse()->getBody()->getContents());
        }
    }
}