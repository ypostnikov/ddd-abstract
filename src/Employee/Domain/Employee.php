<?php

namespace AbstractArea\Employee\Domain;

use AbstractArea\Address\Application\Dto\AddressRequestData;
use AbstractArea\Employee\Application\Dto\EmployeeRequestData;
use DateTimeImmutable;

/**
 * Class Employee
 * @package AbstractArea\Employee\Domain
 */
class Employee
{

    /**
     * @var EmployeeRequestData
     */
    private EmployeeRequestData $employeeData;

    /**
     * @var EmployeeUid
     */
    private EmployeeUid $uid;

    /**
     * @var EmployeeStatus
     */
    private EmployeeStatus $employeeStatus;

    /**
     * @var AddressRequestData
     */
    private AddressRequestData $address;

    /**
     * @var array
     */
    private array $phones = [];

    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $created_at;

    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $updated_at;

    /**
     * Employee constructor.
     * @param EmployeeRequestData $data
     * @param AddressRequestData $address
     */
    public function __construct(EmployeeRequestData $data, AddressRequestData $address)
    {
        $this->employeeData = $data;
        $this->uid = EmployeeUid::generateUid();
        $this->employeeStatus = EmployeeStatus::fromString(EmployeeStatus::STATE_ACTIVE);
        $this->address = $address;
        $this->created_at = new DateTimeImmutable();
    }

    /**
     * @return IEmployeeUid
     */
    public function getUid(): IEmployeeUid
    {
        return $this->uid;
    }

    /**
     * @param EmployeeStatus|null $status
     * @return void
     */
    public function setStatus(EmployeeStatus $status = null): void
    {
        $this->employeeStatus = $status ?? EmployeeStatus::fromString(EmployeeStatus::STATE_ACTIVE);
        $this->updated_at = new DateTimeImmutable();
    }

    /**
     * @param AddressRequestData $address
     */
    public function changeAddress(AddressRequestData $address)
    {
        // object has new address
        $this->address = $address;
    }

    public function addPhone(){

    }



}
