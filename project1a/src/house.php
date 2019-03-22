<?php
namespace opdracht1;
class House
{
    private $number_of_floors;
    private $number_of_rooms;
    private $width;
    private $height;
    private $depth;
    private $price;

    public function setNumberOfFloors($number_of_floors)
    {
        $this->number_of_floors = $number_of_floors;
    }

    public function getNumberOfFloors()
    {
        return "numbers of floors = ".$this->number_of_floors."<br>";
    }

    public function setNumberOfRooms($number_of_rooms)
    {
        $this->number_of_rooms = $number_of_rooms;
    }

    public function getNumberOfRooms()
    {
        return "numbers of rooms = ".$this->number_of_rooms."<br>";
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return "width = ".$this->width."m<br>";
    }

    public function setDepth($depth)
    {
        $this->depth = $depth;
    }

    public function getDepth()
    {
        return "depth = ".$this->depth."m<br>";
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return "height = ".$this->height."m<br>";
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        $this->price = $this->price * ($this->width * $this->height * $this->depth);
        return "Price = €".$this->price."<br>";
    }
}