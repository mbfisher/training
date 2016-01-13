<?php

namespace Training\Modelling\Solution;

class Employee
{
    private $id;
    private $name;
    private $salary;

    /**
     * Constructor
     *
     * Pass these parameters with using the `new` keyword e.g.
     *
     *     $employee = new Employee(1234, "Mike", 1000000);
     *
     */
    public function __construct($id, $name, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * Accessor for ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Accessor for name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Accessor for salary
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Mutator for name
     */
    public function changeName($newName)
    {
        $this->name = $newName;
    }

    /**
     * Mutator for salary
     */
    public function raiseSalary($amount)
    {
        $this->salary += $amount;
    }

    public function getBonusAmount() {
        return 0;
    }
}