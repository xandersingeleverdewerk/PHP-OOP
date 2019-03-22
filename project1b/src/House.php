<?php
/**
 * Created by PhpStorm.
 * User: xrobb
 * Date: 16-2-2019
 * Time: 20:19
 */

namespace project1b;

class House
{
    private $floors;
    private $price;
    private $rooms = [];

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
        $print = "";
        foreach ($this->rooms as $room)
        {
            $print = $room->getSize() * $this->price."<br>";
        }
        return $print;
    }
}