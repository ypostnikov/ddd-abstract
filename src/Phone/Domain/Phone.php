<?php

namespace AbstractArea\Phone\Domain;

/**
 * Class Phone
 * @package AbstractArea\Phone
 */
class Phone
{

    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @var int
     */
    private int $codePhoneNumber;

    /**
     * @var int
     */
    private int $codeCountry;

    /**
     * Phone constructor.
     * @param int $codeCountry
     * @param int $codePhoneNumber
     * @param string $phoneNumber
     */
    public function __construct(int $codeCountry, int $codePhoneNumber, string $phoneNumber)
    {
        //@todo validate...
        $this->phoneNumber = $phoneNumber;
        $this->codePhoneNumber = $codePhoneNumber;
        $this->codeCountry = $codeCountry;
    }

    /**
     * @return int
     */
    public function getCodeCountry(): int
    {
        return $this->codeCountry;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @return int
     */
    public function getCodePhoneNumber(): int
    {
        return $this->codePhoneNumber;
    }

}
