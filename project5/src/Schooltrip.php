<?php

namespace project5;

class Schooltrip
{
    private $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return "The name of the park = ".$this->name."<br>";
    }
}