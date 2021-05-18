<?php

use AbstractArea\Address\Domain\Address;
use AbstractArea\Address\Domain\City;
use AbstractArea\Address\Domain\Country;
use AbstractArea\Address\Domain\PostCode;
use AbstractArea\Address\Domain\StreetHouse;
use PHPUnit\Framework\TestCase;

class AddressTest extends TestCase
{

    public function testMethods()
    {
        $streetHouse = new stdClass();
        $streetHouse->street= 'Lenina';
        $streetHouse->house = '25';
        $address = new Address(new Country('Russia'),new City('Samara'),new PostCode('44444'),new StreetHouse($streetHouse));
        $this->assertEquals(new City('Samara'),$address->getCity(),'City is Samara');
        $this->assertEquals(new Country('Russia'),$address->getCountry(),'Country is Russia');
        $this->assertEquals(new PostCode('44444'),$address->getPostcode(),'Postcode is 44444');
        $this->assertEquals(new StreetHouse($streetHouse), $address->getStreetHouse(),'Streethouse is street=Lenina and house=25');
    }

}
