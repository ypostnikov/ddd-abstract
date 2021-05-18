<?php

namespace AbstractArea\Employee\Application\Dto;


use InvalidArgumentException;

/**
 * Class EmployeeRequestData
 * @package AbstractArea\Employee\Application\Dto
 */
class EmployeeRequestData
{

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $surname;

    /**
     * @var string
     */
    public string $patronymic;

    /**
     * EmployeeRequestData constructor.
     * @param string $name
     * @param string $surname
     * @param string $patronymic
     */
    public function __construct(string $name, string $surname, string $patronymic = '')
    {
        if (empty($name)) {
            throw new InvalidArgumentException('Name is empty');
        }
        if (empty($surname)) {
            throw new InvalidArgumentException('SurName is empty');
        }
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    private function __clone()
    {

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string
    {
        return $this->patronymic;
    }
}