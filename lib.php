<?php
class person{
    
    // property declare.
    var $name = "Sabbir Hossain";
    var $birthday_place = "Rangpur";
    var $cell = "01888559287";
    var $email = "mdsabbir477470@gmail.com";
    var $website = "https://dev-sabbir.web.app";
    // dynamic value sand;
    var $address;
    var $father_name;
    var $mother_name;

    // function vitor ki vabe property gulo call korte hoy.
    //about $this Built-in variable, current object ka define kor..a, specific self reference variable;
    function functionBirthdayPlace(){
        return "Return form method-----Birthday place:-  ". $this->birthday_place;
    }

    function personDetails($newAddress, $newFather_name, $newMother_name){
        return "Person Address ".$this->address=$newAddress.$this->father_name=$newFather_name.$this->mother_name=$newMother_name;
    }
}

?>