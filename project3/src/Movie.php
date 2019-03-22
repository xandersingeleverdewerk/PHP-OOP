<?php

namespace Acme;

class Movie extends Product
{
    private $quality;

    public function __construct($name, $price, $tax, $description, $quality, $revenue, $category)
    {
        parent::__construct($name, $price, $tax, $description, $revenue, $category);
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
        $this->revenue = $revenue;
        $this->description = $description;
        $this->quality = $quality;
        $this->category = $category;
    }

    public function getQuality()
    {
        return $this->quality."<br>";
    }

    public function getShellPrice()
    {
        $this->shellPrice = $this->revenue + $this->tax + $this->price;
        return $this->shellPrice."<br>";
    }

    public function getInformation()
    {
        return "De film is ".$this->name." en kost ".$this->price.". De btw waarde van het prijs is ".$this->tax." de inkoopprijs is ".$this->revenue." de kwaliteit is ".$this->quality." en de beschrijving van het product is ".$this->description."<br>";
    }

}