<?php

use PHPUnit\Framework\TestCase;

class StaffTest extends TestCase
{
    public function testReturnsFullName()
    {
        require('Staff.php');

        $staff = new Staff;

        $staff->first_name = "Nguyen11";
        $staff->last_name = "Bao";

        $this->assertEquals('Nguyen Bao', $staff->getFullName());
    }
    public function testFullNameIsEmptyByDefault()
    {
        $staff = new Staff;
        $this->assertEquals('', $staff->getFullName());
    }

    /**
     * @test
     */
    public function only_first_name()
    {
        $staff = new Staff;
        $staff->first_name = "AAA";
        $this->assertEquals('AAA', $staff->getFullName());
    }
}
