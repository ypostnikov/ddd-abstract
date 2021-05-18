<?php

namespace AbstractArea\Address\Application\Dto;

use AbstractArea\Address\Domain\City;
use AbstractArea\Address\Domain\Country;
use AbstractArea\Address\Domain\PostCode;
use AbstractArea\Address\Domain\StreetHouse;
use stdClass;

/**
 * Class AddressRequestData
 * @package AbstractArea\Address\Application\Dto
 */
class AddressRequestData
{

    /**
     * @var Country
     */
    private Country $country;

    /**
     * @var City
     */
    private City $city;

    /**
     * @var PostCode
     */
    private PostCode $postcode;

    /**
     * @var StreetHouse
     */
    private StreetHouse $streethouse;

    /**
     * AddressRequestData constructor.
     * @param string $country
     * @param string $city
     * @param stdClass $streetHouse
     * @param string $postcode
     */
    public function __construct(string $country, string $city, stdClass $streetHouse, string $postcode = '')
    {
        $this->country = new Country($country);
        $this->city = new City($city);
        $this->postcode = new PostCode($postcode);
        $this->streethouse = new StreetHouse($streetHouse);
    }

    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @return City
     */
    public function getCity(): City
    {
        return $this->city;
    }

    /**
     * @return PostCode
     */
    public function getPostcode(): PostCode
    {
        return $this->postcode;
    }

    /**
     * @return StreetHouse
     */
    public function getStreetHouse(): StreetHouse
    {
        return $this->streethouse;
    }

}
