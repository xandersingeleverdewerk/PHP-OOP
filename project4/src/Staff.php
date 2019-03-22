<?php

namespace Acme;

abstract class Staff extends Person
{
    protected $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    abstract public function getSalary();
}