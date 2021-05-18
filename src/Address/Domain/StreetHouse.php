<?php


namespace AbstractArea\Address\Domain;

use stdClass;

/**
 * Class StreetHouse
 * @package AbstractArea\Address\Domain
 */
class StreetHouse
{

    /**
     * @var string
     */
    private string $street;

    /**
     * @var int
     */
    private int $house;

    /**
     * StreetHouse constructor.
     * @param stdClass $streetHouse
     */
    public function __construct(stdClass $streetHouse)
    {
        $this->street = (string)$streetHouse->street;
        $this->house = (int)$streetHouse->house;
    }

    /**
     * @return int
     */
    public function getHouse(): int
    {
        return $this->house;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

}