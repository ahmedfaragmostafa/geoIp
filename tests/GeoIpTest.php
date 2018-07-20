<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\GeoIp;

class GeoIpTest extends TestCase
{
    private $ipInfo;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        $this->ipInfo = new GeoIp('85.203.13.62');
        parent::__construct($name, $data, $dataName);
    }

    /**
     * test api status
     *
     * @return void
     *
     */
    public function testFetchIp()
    {
        $this->assertTrue($this->ipInfo->getStatus() === 'success');
    }

    /**
     * test if it works as excepted or not
     *
     * @return void
     *
     */
    public function testResult()
    {
        $this->assertEquals('France', $this->ipInfo->getCountry());
        $this->assertEquals('FR', $this->ipInfo->getCountryCode());
        $this->assertEquals('48.8628', $this->ipInfo->getLat());
        $this->assertEquals('2.3292', $this->ipInfo->getLon());
        $this->assertEquals('Falco Networks', $this->ipInfo->getOrg());
        $this->assertEquals('IDF', $this->ipInfo->getRegion());
        $this->assertEquals('Île-de-France', $this->ipInfo->getRegionName());
        $this->assertEquals('Europe/Paris', $this->ipInfo->getTimezone());
        $this->assertEquals('75001', $this->ipInfo->getZip());
    }
}
