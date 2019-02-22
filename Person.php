<?php

class Person{

    public $name;
    public  $age;
    public $gender;

    public function setName($name){

        $this->name=$name;
    }

    public function getName(){

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


