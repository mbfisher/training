<?php

namespace Training\Modelling\Solution;

class Director extends Manager
{
    private $budget;

    public function __construct($id, $name, $salary, $department, $budget)
    {
        parent::__construct($id, $name, $salary, $department);
        $this->budget = $budget;
    }

    public function getBudget()
    {
        return $this->budget;
    }

    public function getBonusAmount()
    {
        return $this->getSalary() * 0.5;
    }
}