<?php

namespace AbstractArea\Address\Domain;

/**
 * Class PostCode
 * @package AbstractArea\Address\Domain
 */
class PostCode
{

    /**
     * @var string
     */
    private string $postcode;

    /**
     * PostCode constructor.
     * @param string $postcode
     */
    public function __construct(string $postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

}
