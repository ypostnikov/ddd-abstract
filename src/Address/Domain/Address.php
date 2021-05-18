<?php

namespace AbstractArea\Address\Domain;

/**
 * Class Address
 * @package AbstractArea\Address\Domain
 */
class Address
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
     * @var Postcode
     */
    private Postcode $postcode;

    /**
     * @var StreetHouse
     */
    private StreetHouse $streetHouse;


    /**
     * Address constructor.
     * @param Country $country
     * @param City $city
     * @param Postcode $postcode
     * @param StreetHouse $streetHouse
     */
    public function __construct(Country $country, City $city, Postcode $postcode, StreetHouse $streetHouse)
    {
        $this->country = $country;
        $this->city = $city;
        $this->postcode = $postcode;
        $this->streetHouse = $streetHouse;
    }

    /**
     * @return Country
     */
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
     * @return Postcode
     */
    public function getPostcode(): Postcode
    {
        return $this->postcode;
    }

    /**
     * @return StreetHouse
     * contains street and house
     */
    public function getStreetHouse(): StreetHouse
    {
        return $this->streetHouse;
    }

}
