<?php

namespace App;

class MagicClass
{
    public function __construct()
    {
        echo "__construct() вызван\n";
    }

    public function __destruct()
    {
        echo "__destruct() вызван\n";
    }

    public function __toString(): string
    {
        echo "__toString() вызван\n";
        return "MagicClass";
    }

    public function __invoke($x)
    {
        echo "__invoke() вызван с аргументом: $x\n";
    }

    public function __get($name)
    {
        echo "__get() вызван для свойства: $name\n";
        return null;
    }

    public function __set($name, $value)
    {
        echo "__set() вызван для свойства: $name со значением: $value\n";
    }

    public function __isset($name)
    {
        echo "__isset() вызван для свойства: $name\n";
        return false;
    }

    public function __unset($name)
    {
        echo "__unset() вызван для свойства: $name\n";
    }

    public function __call($name, $arguments)
    {
        echo "__call() вызван для метода: $name с аргументами: " . implode(', ', $arguments) . "\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic() вызван для статического метода: $name с аргументами: " . implode(', ', $arguments) . "\n";
    }

    public function __sleep()
    {
        echo "__sleep() вызван\n";
        return [];
    }

    public function __wakeup()
    {
        echo "__wakeup() вызван\n";
    }

    public static function __set_state($properties)
    {
        echo "__set_state() вызван\n";
        return new self();
    }

    public function __clone()
    {
        echo "__clone() вызван\n";
    }

    public function __debugInfo()
    {
        echo "__debugInfo() вызван\n";
        return ['debug' => 'info'];
    }
}
