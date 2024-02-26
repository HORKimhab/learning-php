<?php
class newclass{
    
    // Properties and Method goes here
    public $info = "This is public info";
}

# Extend from person can use all in Class Person
class Pet extends Person {
    public function owner(){
        $a = $this->first;
        return $a;
    }
}

$object = new newclass;
// var_dump($object);

# Constructor: https://php.watch/versions/8.0/constructor-property-promotion