<?php

namespace project5;

class Student extends Person
{
    private $payMoney;
    private $paid;
    private $classname = [];

    public function setPayMoney($payMoney)
    {
        $this->payMoney = $payMoney;
    }

    public function setPaid($paid)
    {
        $this->paid = $paid;
    }

    public function getPaid()
    {
        if ($this->paid < $this->payMoney)
        {
            return "you dont have paid enough money<br>";
        } elseif ($this->paid > $this->payMoney)
        {
            $this->paid = $this->paid - ($this->paid - $this->payMoney);
            return "the money paid = €".$this->paid."<br>";
        }
        return $this->paid;
    }

    public function addClassname($classname)
    {
        $this->classname[] = $classname;
    }

    public function getClassname()
    {
        $print = "";
        foreach ($this->classname as $classname)
        {
            $print = $classname->getName();
        }
        return $print;
    }
}