<?php
class Student{
    public $number;
    public $name;
    public $age;
    public function __construct($age,$name,$number)
    {$this->age=$age;
    $this->name=$name;
    $this->number=$number;
    }
}
$student=new Student(12,王保保);
var_dump($student->name);
var_dump($student->age);
var_dump($student);
