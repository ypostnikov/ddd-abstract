<?php

use AbstractArea\Employee\Domain\Employee;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{

    public function testClass()
    {
        $mock= $this->getMockBuilder(Employee::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->assertInstanceOf(Employee::class, $mock);
    }

}
