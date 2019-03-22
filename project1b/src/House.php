<?php

namespace project1b;

class House
{
    private $floors;
    private $price;
    private $rooms = [];
    private $fullSize;

    public function setHouse($floors, $price)
    {
        $this->floors = $floors;
        $this->price = $price;
    }

    public function getHouse()
    {
        return "het huis heeft " . $this->floors . " verdiepingen en kost " . $this->price."<br>";
    }

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }

    public function getFullSize()
    {
        $this->fullSize = "";
        foreach ($this->rooms as $room)
        {
            $this->fullSize = $room->getSize()."<br>";
        }
        return $this->fullSize;
    }

    public function getPrice()
    {
        $this->price = $this->price * $this->fullSize;
        return "price = " . $this->price."<br>";
    }
}
