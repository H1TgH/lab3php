<?php

namespace App;

class MagicClass
{
    // Магический метод для создания объекта
    public function __construct()
    {
        echo __METHOD__ . "\n";
    }

    // Магический метод для уничтожения объекта
    public function __destruct()
    {
        echo __METHOD__ . "\n";
    }

    // Магический метод для клонирования объекта
    public function __clone()
    {
        echo __METHOD__ . "\n";
    }

    // Магический метод для вызова недоступного метода
    public function __call($name, $arguments)
    {
        echo __METHOD__ . " - Called method: $name\n";
    }

    // Магический метод для доступа к недоступному свойству
    public function __get($name)
    {
        echo __METHOD__ . " - Accessed property: $name\n";
    }

    // Магический метод для установки значения недоступного свойства
    public function __set($name, $value)
    {
        echo __METHOD__ . " - Set property: $name with value: $value\n"; 
    }

    // Магический метод для проверки существования недоступного свойства
    public function __isset($name)
    {
        echo __METHOD__ . " - Checked existence of property: $name\n";
    }

    // Магический метод для удаления недоступного свойства
    public function __unset($name)
    {
        echo __METHOD__ . " - Unset property: $name\n";
    }

    // Магический метод для преобразования объекта в строку
    public function __toString()
    {
        return __METHOD__;
    }

    // Магический метод для сериализации объекта
    public function __sleep()
    {
        echo __METHOD__ . "\n";
        return [];
    }

    // Магический метод для восстановления объекта после десериализации
    public function __wakeup()
    {
        echo __METHOD__ . "\n";
    }

    // Магический метод для вызова статического недоступного метода
    public static function __callStatic($name, $arguments)
    {
        echo __METHOD__ . " - Called static method: $name\n";
    }
}

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($dx)
    {
        $this->x += $dx;
    }

    public function moveY($dy)
    {
        $this->y += $dy;
    }

    public function moveVector(Vector $vector)
    {
        $this->x += $vector->x;
        $this->y += $vector->y;
    }

    public function __toString()
    {
        return "Point(x: $this->x, y: $this->y)";
    }
}

class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function length()
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    public function isZero()
    {
        return $this->x == 0 && $this->y == 0;
    }

    public function isPerpendicularTo(Vector $vector)
    {
        return $this->x * $vector->x + $this->y * $vector->y == 0;
    }

    public function __toString()
    {
        return "Vector(x: $this->x, y: $this->y)";
    }
}