<?php

include "Person3.php";

class Teacher extends Person {


    public function __construct($age){
        $this->age=$age;
        parent::__construct('jhon');

    }

    public function testit(){


        //$this->setAge(20);
        //echo $this->getAge();

       echo $this->getAge();
        $this->setgenderbalue('male');
        echo $this->getgenderbalue();
    }

}

$teacher=new Teacher(26);

$teacher->setName("test name");

echo $teacher->getName();

$teacher->testit();




