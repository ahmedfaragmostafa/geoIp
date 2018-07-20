[![Build Status](https://travis-ci.org/ahmedfaragmostafa/geoIp.svg?branch=master)](https://travis-ci.org/ahmedfaragmostafa/geoIp) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/ahmedfaragmostafa/geoIp/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ahmedfaragmostafa/geoIp/)

## GEO IP 

The Easiest way to Get all information about an IP Address using http://ip-api.com

## Install 
```
composer require "ahmedfaragmostafa/geo-ip":"dev-master"
```

## Get Stared
```
use \Src\GeoIp;
 $ipInfo = new GeoIp('IP_ADDRESS'); 
```

## Example 
```
$ipInfo = new \Src\GeoIp('85.203.13.62');

$ipInfo->getCountry(); //France
$ipInfo->getCountryCode(); //FR

$ipInfo->getLon(); //2.3292
$ipInfo->getLat(); //48.8628

$ipInfo->getCity(); //Paris
$ipInfo->getRegionName(); //Île-de-France
$ipInfo->getRegion(); //IDF

$ipInfo->getZip(); // 75001
$ipInfo->getTimezone(); // Europe/Paris

$ipInfo->getOrg(); //Falco Networks
```



### Tests
    $ vendor/bin/phpunit tests
