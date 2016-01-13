<?php

namespace Training\Modelling\Solution;

class Manager extends Employee
{
    private $department;

    public function __construct($id, $name, $salary, $department)
    {
        parent::__construct($id, $name, $salary);
        $this->department = $department;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function getBonusAmount()
    {
        return $this->getSalary() * 0.2;
    }
}