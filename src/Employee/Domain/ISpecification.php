<?php

namespace AbstractArea\Employee\Domain;

interface ISpecification
{

    /**
     * @param Employee $item
     * @return bool
     */
    public function isSatisfiedBy(Employee $item): bool;

}