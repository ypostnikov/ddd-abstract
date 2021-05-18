<?php

namespace AbstractArea\Employee\Domain;

use InvalidArgumentException;

/**
 * Class EmployeeStatus
 * contains valid status for employee
 */
class EmployeeStatus
{

    const STATE_ACTIVE = 'active';

    const STATE_ARCHIVAL = 'archival';

    /**
     * @var array [1->active,2->archival]
     */
    private static array $validStates = [
        1 => self::STATE_ACTIVE,
        2 => self::STATE_ARCHIVAL
    ];

    private $status;

    /**
     * EmployeeStatus constructor.
     * @param int $id
     * @param string $name
     */
    private function __construct(int $id, string $name)
    {
        $this->status = $name;
    }

    /**
     * @param string $status
     */
    protected static function ensureIsValidName(string $status)
    {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }

    /**
     * @param string $status
     * @return EmployeeStatus
     */
    public static function fromString(string $status): EmployeeStatus
    {
        self::ensureIsValidName($status);
        $state = array_search($status, self::$validStates);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state given!');
        }

        return new self($state, $status);
    }

}
