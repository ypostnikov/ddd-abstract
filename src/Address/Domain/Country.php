<?php

namespace AbstractArea\Address\Domain;

use InvalidArgumentException;

/**
 * Class Country
 * @package AbstractArea\Address\Domain
 */
class Country
{

    /**
     * @var string
     */
    private string $country;

    /**
     * Country constructor.
     * @param string $country
     */
    public function __construct(string $country)
    {
        if (empty($country)) {
            throw new InvalidArgumentException('Value is empty');
        }
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

}
