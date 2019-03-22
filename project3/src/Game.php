<?php

namespace Acme;

class Game extends Product
{
    private $genre;
    private $hardwareRequirements;

    public function __construct($name, $price, $tax, $description, $genre, $hardwareRequirements, $revenue, $category)
    {
        parent::__construct($name, $price, $tax, $description, $revenue, $category);
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
        $this->description = $description;
        $this->genre = $genre;
        $this->revenue = $revenue;
        $this->hardwareRequirements = $hardwareRequirements;
        $this->category = $category;
    }

    public function getGenre()
    {
        return $this->genre."<br>";
    }

    public function getHardwareRequirements()
    {
        return $this->hardwareRequirements."<br>";
    }

    public function getShellPrice()
    {
        $this->shellPrice = $this->revenue + $this->tax + $this->price;
        return $this->shellPrice."<br>";
    }

    public function getInformation()
    {
        return "De game is ".$this->name." en kost ".$this->price.". De btw waarde van het prijs is ".$this->tax." de inkoopprijs is ".$this->revenue." de genre is ".$this->genre." de hardwarebenodigdheden zijn ".$this->hardwareRequirements." en de beschrijving van het product is ".$this->description."<br>";
    }

}