<?php

class Employee extends Person{
    public $jobTitle;
    public function __construct($jobTitle,$firstName, $lastName, $gender='f'){
        $this->jobTitle = $jobTitle;
        parent::__construct($firstName, $lastName, $gender);
    }
    public function getJobTitle(){
        return $this->jobTitle;
    }
}

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

$jane = new Employee('Backend Developer','Jane','Doe');
echo $jane->getJobTitle();
echo "<br>";
echo $jane->sayHello();

?>