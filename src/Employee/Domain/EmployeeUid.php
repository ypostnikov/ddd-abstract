<?php

namespace AbstractArea\Employee\Domain;

/**
 * Class EmployeeUid
 * @package AbstractArea\Employee\Domain
 */
class EmployeeUid implements IEmployeeUid
{

    /**
     * @var string
     */
    private string $uid;

    /**
     * EmployeeUid constructor.
     * @param string $uid
     */
    private function __construct(string $uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return EmployeeUid
     */
    static public function generateUid(): EmployeeUid
    {
        return new self('generated uid');
    }

    /**
     * @param string $uid
     * @return mixed|void
     */
    public function getUidFromString(string $uid)
    {
        //generate by algorithm..
    }

}