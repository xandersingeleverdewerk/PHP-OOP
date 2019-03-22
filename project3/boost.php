<?php

use Acme\Music;
use Acme\Game;
use Acme\Movie;
use Acme\ProductList;

$music1 = new Music('thriller', 15, 21, 'bagger dvd',2000, 'music');
$music2 = new Music('thriller2', 15, 6, 'bagger dvd2', 10000, 'music');
$game1 = new Game('sad satan', 10, 6, 'scary game', 'horror', 'Windows 10 pxr982000', 5000, 'game');
$movie1 = new Movie('the conjuring2', 15, 6, 'scary movie', 'hd', 2000, 'movie');

$list1 = new productlist();
$list1->addProducts($movie1);
$list1->addCategories($movie1);
$list1->addShellPrice($movie1);

$list2 = new ProductList();
$list2->addProducts($music1);
$list2->addCategories($music1);
$list2->addShellPrice($music1);

print "<h1>music1</h1>";

print $music1->getName();
print $music1->getPrice();
print $music1->getTax();
print $music1->getProfit();
print $music1->getDescription();
print $music1->getInformation();
print "<br>";

print "<h1>music2</h1>";

print $music2->getName();
print $music2->getPrice();
print $music2->getTax();
print $music2->getProfit();
print $music2->getDescription();
print $music2->getInformation();
print "<br>";

print "<h1>game</h1>";

print $game1->getName();
print $game1->getPrice();
print $game1->getTax();
print $game1->getProfit();
print $game1->getDescription();
print $game1->getGenre();
print $game1->getHardwareRequirements();
print $game1->getInformation();
print "<br>";

print "<h1>movie</h1>";

print $movie1->getName();
print $movie1->getPrice();
print $movie1->getTax();
print $movie1->getProfit();
print $movie1->getDescription();
print $movie1->getQuality();
print $movie1->getInformation();
print "<br>";

print "<h1>productList</h1>";

print $list1->getProducts();
print $list1->getCategories();
print $list1->getShellPrice();
print "<br>";
print $list2->getProducts();
print $list2->getCategories();
print $list2->getShellPrice();