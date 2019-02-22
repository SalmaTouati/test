<?php

 class Person{

    static $name;
    public $age;
    public $gender;

    static function getname()
    {

        return self::$name;

    }
}

Person::$name='Salma';

echo Person::getname();