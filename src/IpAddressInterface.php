<?php

namespace Src;
interface IpAddressInterface
{
    public function getAs(): string;

    public function setAs(string $as);

    public function getCity(): string;

    public function setCity(string $city);

    public function getCountry(): string;

    public function setCountry(string $country);

    public function getCountryCode(): string;

    public function setCountryCode(string $countryCode);

    public function getIsp(): string;

    public function setIsp(string $isp);

    public function getLat(): string;

    public function setLat(string $lat);

    public function getLon(): string;

    public function setLon(string $lon);

    public function getOrg(): string;

    public function setOrg(string $org);

    public function getIp(): string;

    public function setIp(string $query);


    public function getRegion(): string;

    public function setRegion(string $region);

    public function getRegionName(): string;

    public function setRegionName(string $regionName);

    public function getStatus(): string;

    public function setStatus(string $status);

    public function getTimezone(): string;

    public function setTimezone(string $timeZone);

    public function getZip(): string;

    public function setZip(string $zip);
}
