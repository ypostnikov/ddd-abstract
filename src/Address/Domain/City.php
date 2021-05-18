<?php

namespace AbstractArea\Address\Domain;

use InvalidArgumentException;

/**
 * Class City
 * @package AbstractArea\Address\Domain
 */
class City
{

    /**
     * @var string
     */
    private string $city;

    /**
     * City constructor.
     * @param string $city
     */
    public function __construct(string $city)
    {
        if (empty($city)) {
            throw  new \InvalidArgumentException('Value is empty');
        }

        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

}
