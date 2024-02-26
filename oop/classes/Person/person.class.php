<?php
namespace Person; 

class Person {
    protected $first = "H";
    private $last = "Kimhab";
    private $age = "32";
    public $name = "SreyKhuoch";

     // Methods 
     public function setName(string $name){
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
}
