<?php
require 'vendor/autoload.php';

use App\MagicClass;

echo "=== 1. Создание объекта (__construct) ===\n";
$obj = new MagicClass();

echo "\n=== 2. Преобразование к строке (__toString) ===\n";
echo $obj . "\n";

echo "\n=== 3. Вызов как функции (__invoke) ===\n";
$obj("test");

echo "\n=== 4. Обращение к несуществующему свойству (__get) ===\n";
$test = $obj->nonExistentProperty;

echo "\n=== 5. Установка несуществующего свойства (__set) ===\n";
$obj->nonExistentProperty = 123;

echo "\n=== 6. Проверка существования свойства (__isset) ===\n";
isset($obj->nonExistentProperty);

echo "\n=== 7. Удаление свойства (__unset) ===\n";
unset($obj->nonExistentProperty);

echo "\n=== 8. Вызов несуществующего метода (__call) ===\n";
$obj->nonExistentMethod("arg1", "arg2");

echo "\n=== 9. Вызов несуществующего статического метода (__callStatic) ===\n";
MagicClass::nonExistentStaticMethod("arg1", "arg2");

echo "\n=== 10. Сериализация (__sleep) ===\n";
$serialized = serialize($obj);

echo "\n=== 11. Десериализация (__wakeup) ===\n";
$obj2 = unserialize($serialized);

echo "\n=== 12. Клонирование (__clone) ===\n";
$obj3 = clone $obj;

echo "\n=== 13. Использование var_export (__set_state) ===\n";
eval('$obj4 = ' . var_export($obj, true) . ';');

echo "\n=== 14. Debug info при var_dump (__debugInfo) ===\n";
var_dump($obj);

echo "\n=== 15. Завершение (деструкторы вызовутся автоматически) ===\n";
