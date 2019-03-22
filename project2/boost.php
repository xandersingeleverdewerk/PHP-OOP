<?php

require_once 'vendor/autoload.php';

use Acme\Square;
use Acme\Triangle;
use Acme\Rectangle;
use Acme\Circle;

$figure1 = new Square('darkred', '100px', '100px');
$figure2 = new Triangle('red', '250px', '250px', '125px');
$figure3 = new Rectangle ('blue', '250px', '125px');
$figure4 = new Circle ('orange', '125px', '125px');

print "<h1>figure</h1>";
print $figure1->draw();
print $figure2->draw();
print $figure3->draw();
print $figure4->draw();