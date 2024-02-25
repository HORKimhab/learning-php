<?php
class NewClass{
    
    // Properties and Method goes here
    public $info = "This is public info";
}
class Person {
    protected $first = "H";
    private $last = "Kimhab";
    private $age = "32";
    public $name = "SreyKhuoch";

     // Methods 
     public function setName($name){
        $this->name = $name;
    }
}

# Extend from person can use all in Class Person
class Pet extends Person {
    public function owner(){
        $a = $this->first;
        return $a;
    }
}

$object = new NewClass;
// var_dump($pet);