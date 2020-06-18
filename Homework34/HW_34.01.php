<?php

class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }
}

$John = newPerson("John", "35");
echo $John->getName();
echo $John->getAge();
var_dump($John);
