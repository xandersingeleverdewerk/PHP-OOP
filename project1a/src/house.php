<?php
/**
 * Created by PhpStorm.
 * User: xrobb
 * Date: 16-2-2019
 * Time: 18:49
 */

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
        if ($number_of_floors < 0)
        {
            print("A house need to contain at least a storage level.");
        }else {
            print ("Number of floors = ".$this->number_of_floors);
            $this->number_of_floors = $number_of_floors;
        }
    }

    public function getNumberOfFloors()
    {
        return $this->number_of_floors;
    }

    public function setNumberOfRooms($number_of_rooms)
    {
        if ($number_of_rooms < 0)
        {
            print("A house must contain at least a hallway.");
        }else {
            print ("Number of rooms = ".$this->number_of_rooms);
            $this->number_of_rooms = $number_of_rooms;
        }
    }

    public function getNumberOfRooms()
    {
        return $this->number_of_rooms;
    }

    public function setWidth($width)
    {
        if ($width < 1.5)
        {
            print("A house have to be at least 1.5m width.");
        }else{
            print ("Width = ".$this->width);
            $this->width = $width;
        }
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setDepth($depth)
    {
        if ($depth < 4)
        {
            print("A house have to be at least 4m depth");
        }else{
            print ("Depth = ".$this->depth);
            $this->depth = $depth;
        }
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setHeight($height)
    {
        if ($height < 2.40)
        {
            print("A house have to be at least 2.40m height.");
        }else{
            print ("Height = ".$this->height);
            $this->height = $height;
        }
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        $this->price = $this->price * ($this->width * $this->height * $this->depth);
        if ($this->price == 0)
        {
            print("One of the attributes is incorrect");
        }else {
            print "Price = " . $this->price;

        }
    }
}