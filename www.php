<?php
class Student{
    public $name;
    public $age;
    public function __construct($age,$name)
    {$this->age=$age;
    $this->name=$name;
    }
}
$student=new Student(12,王保保);
var_dump($student->name);
var_dump($student->age);
var_dump($student);
