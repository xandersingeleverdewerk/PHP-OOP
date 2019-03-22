<?php

namespace Acme;

Abstract class Product
{
    protected $name;
    protected $price;
    protected $tax;
    protected $description;
    protected $revenue;
    protected $category;
    protected $shellPrice;

    public function __construct($name, $price, $tax, $description, $revenue, $category)
    {
        $this->price = $price;
        $this->name = $name;
        $this->tax = $tax;
        $this->description = $description;
        $this->revenue = $revenue;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getName()
    {
        return $this->name."<br>";
    }

    public function getPrice()
    {
        return $this->price."<br>";
    }

    public function getTax()
    {
        return $this->tax."<br>";
    }

    public function getProfit()
    {
        $profit = $this->revenue - ($this->price + $this->tax);
        return $profit."<br>";
    }

    public function getDescription()
    {
        return $this->description."<br>";
    }

    public function getShellPrice()
    {
        $this->shellPrice = $this->revenue + $this->tax + $this->price;
        return $this->shellPrice."<br>";
    }

    abstract public function getInformation();
}