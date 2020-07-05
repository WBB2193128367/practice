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
