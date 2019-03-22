<?php

namespace project5;

abstract class Person
{
    private $firstName;
    private $lastName;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return "FirstName = ".$this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return "LastName = ".$this->lastName;
    }
}