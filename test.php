<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '5G');
error_reporting(E_ALL);

class Animal {

    function get_species() {
        return "I am an animal.\n";
    }

 }

 class Dog extends Animal {

    //  function __construct(){
    //      $this->get_species();
    //  }

     function get_species(){
        $result = parent::get_species();
        echo $result."More specifically, I am a dog.\n";
     }
}

$dog = new Dog;
$dog->get_species();