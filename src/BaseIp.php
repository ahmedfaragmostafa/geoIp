<?php

namespace Src;
/**
 * Class BaseIp
 *
 * @package Src
 */
class BaseIp implements IpAddressInterface
{
    protected $as;
    protected $city;
    protected $country;
    protected $countryCode;
    protected $isp;
    protected $lat;
    protected $lon;
    protected $org;
    protected $query;
    protected $region;
    protected $regionName;
    protected $status;
    protected $timezone;
    protected $zip;


    /**
     * getAs
     *
     * @return string
     *
     */
    public function getAs(): string
    {
        return (string)$this->as;
    }

    /**
     * setAs
     *
     * @param string $as as
     *
     * @return $this
     *
     */
    public function setAs(string $as)
    {
        $this->as = $as;

        return $this;
    }

    /**
     * getCity
     *
     * @return string
     *
     */
    public function getCity(): string
    {
        return (string)$this->city;
    }

    /**
     * setCity
     *
     * @param string $city city
     *
     * @return $this
     *
     */
    public function setCity(string $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * getCountry
     *
     * @return string
     *
     */
    public function getCountry(): string
    {
        return (string)$this->country;
    }

    /**
     * setCountry
     *
     * @param string $country country
     *
     * @return $this
     *
     */
    public function setCountry(string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * getCountryCode
     *
     * @return string
     *
     */
    public function getCountryCode(): string
    {
        return (string)$this->countryCode;
    }

    /**
     * setCountryCode
     *
     * @param string $countryCode countryCode
     *
     * @return $this
     *
     */
    public function setCountryCode(string $countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * getIsp
     *
     * @return string
     *
     */
    public function getIsp(): string
    {
        return (string)$this->isp;
    }

    /**
     * setIsp
     *
     * @param string $isp isp
     *
     * @return $this
     *
     */
    public function setIsp(string $isp)
    {
        $this->isp = $isp;

        return $this;
    }

    /**
     * getLat
     *
     * @return string
     *
     */
    public function getLat(): string
    {
        return (string)$this->lat;
    }

    /**
     * setLat
     *
     * @param string $lat lat
     *
     * @return $this
     *
     */
    public function setLat(string $lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * getLon
     *
     * @return string
     *
     */
    public function getLon(): string
    {
        return (string)$this->lon;
    }

    /**
     * setLon
     *
     * @param string $lon lon
     *
     * @return $this
     *
     */
    public function setLon(string $lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * getOrg
     *
     * @return string
     *
     */
    public function getOrg(): string
    {
        return (string)$this->org;
    }

    /**
     * setOrg
     *
     * @param string $org org
     *
     * @return $this
     *
     */
    public function setOrg(string $org)
    {
        $this->org = $org;

        return $this;
    }

    /**
     * getIp
     *
     * @return string
     *
     */
    public function getIp(): string
    {
        return (string)$this->query;
    }

    /**
     * setIp
     *
     * @param string $ip ip
     *
     * @return $this
     *
     */
    public function setIp(string $ip)
    {
        $this->query = $ip;

        return $this;
    }

    /**
     * getRegion
     *
     * @return string
     *
     */
    public function getRegion(): string
    {
        return (string)$this->region;
    }

    /**
     * setRegion
     *
     * @param string $region region
     *
     * @return $this
     *
     */
    public function setRegion(string $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * getRegionName
     *
     * @return string
     *
     */
    public function getRegionName(): string
    {
        return (string)$this->regionName;
    }

    /**
     * setRegionName
     *
     * @param string $regionName regionName
     *
     * @return $this
     *
     */
    public function setRegionName(string $regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * getStatus
     *
     * @return string
     *
     */
    public function getStatus(): string
    {
        return (string)$this->status;
    }

    /**
     * setStatus
     *
     * @param string $status status
     *
     * @return $this
     *
     */
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * getTimezone
     *
     * @return string
     *
     */
    public function getTimezone(): string
    {
        return (string)$this->timezone;
    }

    /**
     * setTimezone
     *
     * @param string $timezone timezone
     *
     * @return $this
     *
     */
    public function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * getZip
     *
     * @return string
     *
     */
    public function getZip(): string
    {
        return (string)$this->zip;
    }

    /**
     * setZip
     *
     * @param string $zip zip
     *
     * @return $this
     *
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;

        return $this;
    }
}
