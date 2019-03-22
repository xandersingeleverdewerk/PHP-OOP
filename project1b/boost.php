<?php

require_once 'vendor/autoload.php';

use project1b\House;
use project1b\Room;
$house1 = new House();

$house1->setHouse(2,29999);
$room1 = new Room();
$room1->setRoom(3, 3, 3);
$room2 = new Room();
$room2->setRoom(5, 4, 3);
$house2 = new House();
$house2->setHouse(3,200000);

$house1->addRoom($room1);
$house1->addRoom($room2);
$house2->addRoom($room1);

print $house1->getHouse();
print $house1->getFullSize();
print $house2->getHouse();
print $house2->getFullSize();
