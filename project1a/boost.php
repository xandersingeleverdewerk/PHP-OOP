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

print "house 1";
print $house1->getNumberOfFloors()."<br>";
print $house1->getNumberOfRooms()."<br>";
print $house1->getWidth()."<br>";
print $house1->getDepth()."<br>";
print $house1->getHeight()."<br>";
print $house1->getPrice()."<br><br>";

print "house 2";
print $house2->getNumberOfFloors()."<br>";
print $house2->getNumberOfRooms()."<br>";
print $house2->getWidth()."<br>";
print $house2->getDepth()."<br>";
print $house2->getHeight()."<br>";
print $house2->getPrice()."<br><br>";

print "house 3";
print $house3->getNumberOfFloors()."<br>";
print $house3->getNumberOfRooms()."<br>";
print $house3->getWidth()."<br>";
print $house3->getDepth()."<br>";
print $house3->getHeight()."<br">;
print $house3->getPrice();
