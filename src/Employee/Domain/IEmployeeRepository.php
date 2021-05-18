<?php

namespace AbstractArea\Employee\Domain;

use AbstractArea\Address\Domain\Address;

/**
 * Interface IEmployeeRepository
 * @package AbstractArea\Employee\Domain
 */
interface IEmployeeRepository
{

    /**
     * @param Employee $employee
     * @return mixed
     */
    public function create(Employee $employee);

    /**
     * @param Employee $employee
     * @return bool
     */
    public function save(Employee $employee): bool;

    /**
     * @param Address $address
     * @return bool
     */
    public function saveAddress(Address $address): bool;

    /**
     * @return array
     */
    public function getAll(): array;

    /**
     * @param $uid
     * @return Employee
     */
    public function findByUid($uid): Employee;

    /**
     * @param $uid
     * @return bool
     */
    public function delete($uid): bool;

    /**
     * @return string
     */
    public function generateUid(): string;


    /**
     * @param $uid
     * @return bool
     */
    public function inArchive($uid): bool;

    /**
     * @param $uid
     * @return Employee
     */
    public function outArchive($uid): Employee;

}
