<?php

class MainAuthor{
    public $name;
    public $surname;
    public $age;

    function __construct($_name,$_surname,$_age){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->age = $_age;
    }
    // // function Fullname
    function getFullName() {
        return $this->name . " " . $this->surname;
      }

    

}