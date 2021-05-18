<?php


namespace AbstractArea\Employee\Domain;

/**
 * Interface IEmployeeUid
 * @package AbstractArea\Employee\Domain
 */
interface IEmployeeUid
{

    /**
     * @return mixed
     */
    static public function generateUid();

    /**
     * @param string $uid
     * @return mixed
     */
    public function getUidFromString(string $uid);

}