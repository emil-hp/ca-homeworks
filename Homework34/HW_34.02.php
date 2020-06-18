<?php

class Person {

    public $name;
    public $job;
    public $age;

    function __construct($name, $job, $age) {
        $this->name= $name;
        $this->job = $job;
        $this->age = $age;
    }

    function changeJob($newJob) {
        $this->job = $newJob;
    }

    function happyBirthday() {
        ++$this->age;
    }
}

$person1 = new Person("John", "Network Engineer", 38);
$perosn2 = new Person("Bob", "Web Developer", "33");

echo "<pre>User1:", print_r($User1, TRUE), "</pre>";
echo "<pre>User2:", print_r($User2, TRUE), "</pre>";

$User1->changeJob("It Security");
$User2->happyBirthday();

echo "<pre>User1: ", print_r($User1, TRUE), "</pre>";
echo "<pre>User2: ", print_r($User2, TRUE), "</pre>";

