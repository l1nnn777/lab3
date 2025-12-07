<?php
require 'vendor/autoload.php';

use App\Point;
use App\Vector;

$T1 = new Point(2, 3);
$V1 = new Vector(1, 2);
$V2 = new Vector(0, 0);
$V3 = new Vector(-2, 1); // перпендикулярен V1

echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n";

echo "V3 перпендикулярен V1? " . ($V3->isPerpendicular($V1) ? "Да" : "Нет") . "\n";

$T1->move($V1->x, $V1->y);
echo "Точка T1 после перемещения: ({$T1->x}, {$T1->y})\n";
