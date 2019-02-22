<?php

class Person
{

    public $name;
    public  $age;
    public $gender;
    
    public function setName($name)
    {

        $this->name=$name;
    }

    public function getName()
    {

        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}

 $person= new Person();

$person->setName('jhon');
echo $person->getName();
    
$person->setAge(26);
$person->setGender('male');
    
echo $person->getAge();
echo $person->getGender();
