<?php

namespace Acme;

class Music extends Product
{
    private $songs = [];

    public function __construct($name, $price, $tax, $description, $revenue, $category)
    {
        parent::__construct($name, $price, $tax, $revenue, $description, $category);
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
        $this->revenue = $revenue;
        $this->description = $description;
        $this->category = $category;
    }

    public function addSongs($songs)
    {
        $this->songs [] = $songs;
    }

    public function getShellPrice()
    {
        $this->shellPrice = $this->revenue + $this->tax + $this->price;
        return $this->shellPrice."<br>";
    }

    public function getInformation()
    {
        return "De Music is ".$this->name." en kost ".$this->price.". De btw waarde van het prijs is ".$this->tax." de inkoopprijs is ".$this->revenue." en de beschrijving van het product is ".$this->description."<br>";
    }

}