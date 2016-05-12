<?php

namespace App\Data\Repositories;

use App\Data\Entities\School;
use Geocoder\Exception\NoResult;
use Geocoder\Provider\GoogleMaps;
use Geocoder\Provider\GoogleMapsBusiness;
use Ivory\HttpAdapter\CurlHttpAdapter;

class Schools
{
    private $geocoder;

    public function __construct()
    {
        $curl = new CurlHttpAdapter();
        $this->geocoder = new GoogleMapsBusiness($curl, 'pt-BR', 'BR', true, 'AIzaSyC8eXlKYV6uoohHzw0zbz0pll3rgrUMll8');
    }

    private function geolocate($school)
    {
        try
        {
            $addresses = $this->geocoder->geocode($school->address);
        }
        catch (NoResult $exception)
        {
            return null;
        }

        $school->geolocation = json_encode($this->geolocationToArray($addresses));

        foreach ($addresses as $address)
        {
            if ($this->translit($address->getLocality()) == $this->translit($school->city))
            {
                $school->latitude = $address->getCoordinates()->getLatitude();
                $school->longitude = $address->getCoordinates()->getLongitude();

                break;
            }
        }

        $school->save();

        echo "$school->name<br>";

        $this->obFlush();
    }

    public function geolocateAll()
    {
        ob_start();

        foreach (School::all() as $school)
        {
            if ($school->address && ! $school->latitude)
            {
                $this->geolocate($school);
            }
        }

        ob_end_clean();
    }

    private function geolocationToArray($addresses)
    {
        $result = [];

        foreach ($addresses as $address)
        {
            $result[] = [
                'coordinates' => [
                    'latitude' => $address->getCoordinates()->getLatitude(),
                    'longitude' => $address->getCoordinates()->getLongitude(),
                ],

                'bounds' => [
                    'south' => $address->getBounds()->getSouth(),
                    'west' => $address->getBounds()->getWest(),
                    'north' => $address->getBounds()->getNorth(),
                    'east' => $address->getBounds()->getEast(),
                ],

                'streetNumber' => $address->getStreetNumber(),
                'streetName' => $address->getStreetName(),
                'subLocality' => $address->getSubLocality(),
                'locality' => $address->getLocality(),
                'postalCode' => $address->getPostalCode(),

                'adminLevels' => $this->getAdminLevels($address),

                'country' => [
                    'name' => $address->getCountry()->getName(),
                    'code' => $address->getCountry()->getCode(),
                ],

                'timezone' => $address->getTimezone(),
            ];
        }

        return $result;
    }

    private function getAdminLevels($address)
    {
        $result = [];

        foreach ($address->getAdminLevels() as $adminLevel)
        {
            $result = [
                'level' => $adminLevel->getLevel(),
                'name' => $adminLevel->getName(),
                'code' => $adminLevel->getCode(),
            ];
        }

        return $result;
    }

    private function obFlush()
    {
        ob_flush();
        flush();
    }

    private function translit($string)
    {
        return strtolower(iconv('utf8', 'ASCII//TRANSLIT', $string));
    }
}


function getJsonData(){
    $var = get_object_vars($this);
    foreach($var as &$value){
        if(is_object($value) && method_exists($value,'getJsonData')){
            $value = $value->getJsonData();
        }
    }
    return $var;
}
