<?php

namespace AbstractArea\Employee\Application;

use AbstractArea\Address\Application\Dto\AddressRequestData;
use AbstractArea\Address\Domain\Address;
use AbstractArea\Employee\Application\Dto\EmployeeRequestData;
use AbstractArea\Employee\Domain\Employee;
use AbstractArea\Employee\Domain\EmployeeStatus;
use AbstractArea\Employee\Domain\EmployeeUid;
use AbstractArea\Employee\Domain\IEmployeeRepository;
use AbstractArea\DomainEvents\IDomainEventPublisher;

/**
 * Class EmployeeService
 * @package AbstractArea\Employee
 */
class EmployeeService
{

    /**
     * @var IEmployeeRepository
     */
    private IEmployeeRepository $repo;

    /**
     * @var IDomainEventPublisher
     */
    private IDomainEventPublisher $manager;

    /**
     * EmployeeService constructor.
     * @param IEmployeeRepository $repo
     * @param IDomainEventPublisher $manager
     */
    public function __construct(IEmployeeRepository $repo, IDomainEventPublisher $manager)
    {
        $this->repo = $repo;
        $this->manager = $manager;
    }

    /**
     * @param EmployeeRequestData $data
     * @param AddressRequestData $address
     * @return Employee
     */
    public function create(EmployeeRequestData $data, AddressRequestData $address): Employee
    {
        $employee = new Employee($data, $address);
        $this->repo->save($employee);
        return $employee;
    }

    /**
     * @param Employee $employee
     */
    public function delete(Employee $employee)
    {
        $this->repo->delete($employee->getUid());
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        $bundle = $this->repo->getAll();
        return $bundle;
    }

    /**
     * @param EmployeeUid $uid
     * @return Employee
     */
    public function findByUid(EmployeeUid $uid): Employee
    {
        $employee = $this->repo->findByUid($uid);
        return $employee;
    }

    /**
     * @param Employee $employee
     */
    public function inArchive(Employee $employee)
    {
        $employee->setStatus(EmployeeStatus::fromString(EmployeeStatus::STATE_ARCHIVAL));
        $this->repo->inArchive($employee->getUid());
    }

    /**
     * @param EmployeeUid $uid
     * @return Employee
     */
    public function outArchive(EmployeeUid $uid): Employee
    {
        $employee = $this->repo->outArchive($uid);
        $employee->setStatus();
        return $employee;
    }

    /**
     * @param Employee $employee
     * @param AddressRequestData $address
     */
    public function changeAddress(Employee $employee, AddressRequestData $address)
    {
        $employee->changeAddress($address);
        $this->repo->save($employee);
    }

}
