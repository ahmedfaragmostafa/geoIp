<?php

namespace Src;
/**
 * Class GeoIp
 *
 * @package Src
 */
class  GeoIp extends BaseIp
{
    const INVALID_IP     = 'Invalid IP Address, please use valid one';
    const FAILED_REQUEST = 'Unable to retrieve data';

    private $fields = [
        'as',
        'city',
        'country',
        'countryCode',
        'isp',
        'lat',
        'lon',
        'org',
        'query',
        'region',
        'regionName',
        'status',
        'timezone',
        'zip',
    ];


    public function __construct(string $ip)
    {
        $this->validateIpAddress($ip);
        $data = $this->fetchIpInfo($ip);

        foreach ($data as $key => $value) {
            if (in_array($key, $this->fields, true)) {
                $this->{$key} = $value;
            }
        }

        return $this;
    }

    /**
     * validateIpAddress
     *
     *
     * @param string $ip
     *
     * @return void
     */
    private function validateIpAddress(string $ip)
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP)) {
            throw new \InvalidArgumentException(self::INVALID_IP, 400);
        }
    }


    /**
     * fetchIpInfo
     *
     * @param string $ip ip
     *
     * @return array
     *
     */
    private function fetchIpInfo(string $ip): array
    {
        ob_start();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/{$ip}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response   = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($httpStatus !== 200) {
            throw new \Exception(self::FAILED_REQUEST);
        }
        $info = json_decode($response, true);

        return $info;
    }

}
