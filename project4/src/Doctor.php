<?php

namespace Acme;

class Doctor extends Staff
{
    public function setRole($role)
    {
        parent::setRole($role);
        $this->role = $role;
    }

    public function getRole()
    {
        return "role = ".$this->role."<br>";
    }

    public function setSalary($salary)
    {
        parent::setSalary($salary);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return "salary = €".$this->salary."<br>";
    }

}