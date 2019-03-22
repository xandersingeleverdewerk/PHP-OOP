<?php

namespace Acme;

abstract class Person
{
    private $eyeColor;
    private $hairColor;
    private $length;
    private $weight;
    protected $role;

    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }

    public function getEyeColor()
    {
        return "eye color = ".$this->eyeColor."<br>";
    }

    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;
    }

    public function getHairColor()
    {
        return "hair color = ".$this->hairColor."<br>";
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return "Length = ".$this->length." cm <br>";
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return "weight = ".$this->weight." kg<br>";
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    abstract public function getRole();
}