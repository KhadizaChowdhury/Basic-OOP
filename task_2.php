<?php
/**
 * Create a PHP class called "Person" with the following properties and methods:
Properties:
Name
Email
Methods:
setName($name): sets the name property
setEmail($email): sets the email property
getName(): returns the name property
getEmail(): returns the email property

Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.
 */

 class Person{
    private $name;
    private $email;

    public function setName($sName){
        $this->name = $sName;
    }

    public function setEmail($sEmail){
        $this->email = $sEmail;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
 }

 $person = new Person();
 $person->setName('Fariha');
 $person->setEmail('Fariha@gmail.com');

 echo "Task 2: <br />Name:". $person->getName()."<br />Email:". $person->getEmail();