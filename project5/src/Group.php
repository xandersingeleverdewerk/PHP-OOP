<?php

namespace project5;

class Group
{
    private $name;
    private $group = [];
    private $classmates;
    private $percentage;
    private $numberOfStudents;
    private $collectedMoney = [];
    private $numberOfClasses;
    private $collectedMoneyPerClass = [];


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "the name of the group = ".$this->name;
    }

    public function addGroup($group)
    {
        $this->group[] = $group;
    }

    public function getGroup()
    {
        $print = "";
        foreach ($this->group as $group)
        {
            $print = $group->getPaid();
        }
        return $print;
    }

    public function setClassMates($classmates)
    {
        $this->classmates = $classmates;
    }

    public function getClassmates()
    {
        return "number of students in class = ".$this->classmates;
    }

    public function getPercentage()
    {
        $this->percentage = 100 / $this->classmates * $this->numberOfStudents;
        return "percentage who have paid and go to the school trip = ".$this->percentage."%";
    }

    public function setNumberOfStudents($numberOfStudents)
    {
        $this->numberOfStudents = $numberOfStudents;
    }

    public function getNumberOfStudents()
    {
        return $this->numberOfStudents;
    }

    public function addCollectedMoney($collectedMoney)
    {
        $this->collectedMoney[] = $collectedMoney;
    }

    public function getCollectedMoney()
    {
        $print = "";
        foreach ($this->collectedMoney as $collectedMoney)
        {
            $print = $collectedMoney->getPaid() * $this->numberOfStudents;
        }
        return $print;
    }

    public function setNumberOfClasses($numberOfClasses)
    {
        $this->numberOfClasses = $numberOfClasses;
    }

    public function getNumberOfClasses()
    {
        return $this->numberOfClasses;
    }

    public function addCollectedMoneyPerClass($collectedMoneyPerClass)
    {
        $this->collectedMoneyPerClass[] = $collectedMoneyPerClass;
    }

    public function getCollectedMoneyPerClass()
    {
        $print = "";
        foreach ($this->collectedMoneyPerClass as $collectedMoneyPerClass)
        {
            $print = $collectedMoneyPerClass->getPaid() * $this->numberOfStudents / $this->numberOfClasses;
        }
        return $print;
    }
}