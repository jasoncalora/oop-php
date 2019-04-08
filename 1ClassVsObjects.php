<?php

class Person{
    public $firstname;
    public $lastname;
    public $gender;
    
    public function __construct($firstName, $lastName, $gender='f'){
        $this->firstname = $firstName;
        $this->lastname = $lastName;
        $this->gender = $gender;
    }
    public function sayHello(){
        return "Hello my name is " . $this->firstname . " " . $this->lastname;
    }
    public function getGender(){
        return $this->gender;
    }
}

$john = new Person('John', 'Doe', 'M');
$jane = new Person('Jane', 'Doe');

echo $john->sayhello();
echo "<br>";
echo $jane->sayhello() . " Gender: ". $jane->getGender();
echo "<br>";


?>