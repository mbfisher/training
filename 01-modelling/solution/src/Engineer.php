<?php

namespace Training\Modelling\Solution;

class Engineer extends Employee
{
    private $skills;

    public function __construct($id, $name, $salary, array $skills)
    {
        parent::__construct($id, $name, $salary);
        $this->skills = $skills;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function addSkill($skill)
    {
        $this->skills[] = $skill;
    }

    public function getBonusAmount()
    {
        return $this->getSalary() * 0.1;
    }
}