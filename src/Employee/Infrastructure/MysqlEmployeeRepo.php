<?php

namespace AbstractArea\Employee\Infrastructure;

use AbstractArea\Address\Domain\Address;
use AbstractArea\Employee\Domain\IEmployeeRepository;
use AbstractArea\Employee\Domain\Employee;
use AbstractArea\Employee\Domain\IEmployeeUid;

/**
 * Class MysqlEmployeeRepo
 * @package AbstractArea\Employee\Infrastructure
 */
class MysqlEmployeeRepo implements IEmployeeRepository
{

    public function create(Employee $employee)
    {

    }

    public function save(Employee $employee): bool
    {

    }

    public function saveAddress(Address $address): bool
    {

    }

    public function getAll(): array
    {

    }

    public function findByUid($uid): Employee
    {

    }

    public function delete($uid): bool
    {

    }

    public function generateUid(): string
    {

    }

    public function inArchive($uid): bool
    {

    }

    public function outArchive($uid): Employee
    {

    }

}
