<?php

namespace Acme;

class ProductList
{
    private $products = [];
    private $categories = [];
    private $shellPrice = [];

    public function addProducts($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        $print = "<table border='1'>";
        foreach ($this->products as $product)
        {
            $print .= "<tr><td>".$product->getName()."</td>";
        }
        return $print;
    }

    public function addCategories($category)
    {
        $this->categories[] = $category;
    }

    public function getCategories()
    {
        $print = "";
        foreach ($this->categories as $category)
        {
            $print .= "<td>".$category->getCategory()."</td>";
        }
        return $print;
    }

    public function addShellPrice($shellPrice)
    {
        $this->shellPrice[] = $shellPrice;
    }

    public function getShellPrice()
    {
        $print = "";
        foreach ($this->shellPrice as $shellPrice)
        {
            $print = "<td>".$shellPrice->getShellPrice()."</td></tr>";
        }
        $print .= "</table>";
        return $print;
    }

}