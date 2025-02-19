<?php
require_once 'vendor/autoload.php';
use opdracht1\House;

$house1 = new House();
$house1->setNumberOfFloors(3);
$house1->setNumberOfRooms(7);
$house1->setWidth(5.5);
$house1->setDepth(11);
$house1->setHeight(7.5);
$house1->setPrice(44.24);

$house2 = new House();
$house2->setNumberOfFloors(1);
$house2->setNumberOfRooms(8);
$house2->setWidth(10);
$house2->setDepth(10);
$house2->setHeight(2.60);
$house2->setPrice(44.24);

$house3 = new House();
$house3->setNumberOfFloors(2);
$house3->setNumberOfRooms(6);
$house3->setWidth(10);
$house3->setDepth(11);
$house3->setHeight(5);
$house3->setPrice(44.24);

print "<h1>house 1</h1>";
print $house1->getNumberOfFloors();
print $house1->getNumberOfRooms();
print $house1->getWidth();
print $house1->getDepth();
print $house1->getHeight();
print $house1->getPrice()."<br>";

print "<h1>house 2</h1>";
print $house2->getNumberOfFloors();
print $house2->getNumberOfRooms();
print $house2->getWidth();
print $house2->getDepth();
print $house2->getHeight();
print $house2->getPrice()."<br>";

print "<h1>house 3</h1>";
print $house3->getNumberOfFloors();
print $house3->getNumberOfRooms();
print $house3->getWidth();
print $house3->getDepth();
print $house3->getHeight();
print $house3->getPrice();