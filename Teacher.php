<?php
/**
 * Created by PhpStorm.
 * User: ijaz0
 * Date: 10/17/2018
 * Time: 4:44 PM
 */
include "Person.php";

class Teacher extends Person {




}

$teacher=new Teacher();

$teacher->setName("test name");

echo $teacher->getName();

 




