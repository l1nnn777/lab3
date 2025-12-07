<?php
require 'vendor/autoload.php';

// === Часть 1: Демонстрация MagicClass ===
echo "=== ЧАСТЬ 1: Демонстрация MagicClass ===\n";
use App\MagicClass;

$obj = new MagicClass();

echo "\n1. Преобразование к строке:\n";
echo $obj . "\n";

echo "\n2. Вызов как функции:\n";
$obj("test");

echo "\n3. Обращение к несуществующему свойству:\n";
$test = $obj->nonExistentProperty;

echo "\n4. Установка несуществующего свойства:\n";
$obj->nonExistentProperty = 123;

echo "\n5. Проверка существования свойства:\n";
isset($obj->nonExistentProperty);

echo "\n6. Вызов несуществующего метода:\n";
$obj->nonExistentMethod("arg1", "arg2");

echo "\n7. Вызов несуществующего статического метода:\n";
MagicClass::nonExistentStaticMethod("arg1", "arg2");

echo "\n8. Клонирование:\n";
$obj3 = clone $obj;

echo "\n9. Debug info:\n";
var_dump($obj);

// === Часть 2: Работа с Point и Vector ===
echo "\n\n=== ЧАСТЬ 2: Работа с геометрией ===\n";
use App\Point;
use App\Vector;

// Создание объектов
$T1 = new Point(2, 3);
$V1 = new Vector(1, 2);
$V2 = new Vector(0, 0);
$V3 = new Vector(-2, 1); // перпендикулярен V1

// Вывод длин векторов
echo "Длина V1: " . $V1->length() . "\n";
echo "Длина V2: " . $V2->length() . "\n";
echo "Длина V3: " . $V3->length() . "\n";

// Проверка перпендикулярности
echo "V3 перпендикулярен V1? " . ($V3->isPerpendicular($V1) ? "Да" : "Нет") . "\n";

// Перемещение точки
$T1->move($V1->x, $V1->y);
echo "Точка T1 после перемещения: ({$T1->x}, {$T1->y})\n";

echo "\n=== Завершение программы ===\n";
