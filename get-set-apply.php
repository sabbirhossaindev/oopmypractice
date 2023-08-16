<?php
    //
    class personDetails{
        // property declare.
        var $name;
        var $birthday_date;
        var $birthday_place;
        var $cell;
        var $email;
        var $website;
        var $address;
        var $father_name;
        var $mother_name;
        var $brother_name;
        var $sister_name;

        function setMethodMySelf($nName, $nBirthday_date, $nBirthday_place, $nCell, $nEmail, $nWebsite, $nAddress, $nFather_name, $nMother_name, $nBrother_name, $nSister_name){

            $this->name=$nName;
            $this->name=$nBirthday_date;
            $this->name=$nBirthday_place;
            $this->name=$nCell;
            $this->name=$nEmail;
            $this->name=$nWebsite;
            $this->name=$nAddress;
            $this->name=$nFather_name;
            $this->name=$nMother_name;
            $this->name=$nBrother_name;
            $this->name=$nSister_name;
        }

        function getMethodMySelf(){
            return"user name ". $this->name."<br>"."Birth day = ".$this->birthday_date."<br>".$this->name. " is Birthday place = ".$this->birthday_place."<br>".$this->name. " her phone Number = ".$this->cell."<br>".$this->name. "'s email = ".$this->email."<br>".$this->name. " is website = ".$this->website."<br>".$this->name. "'s address = ".$this->address."<br>".$this->name. "'s father name = ".$this->father_name."<br>".$this->name. "'s mother name = ".$this->mother_name."<br>".$this->name. "'s brother name = ".$this->brother_name."<br>".$this->name. "'s sister name = ".$this->sister_name."<br>";
        }
    }
?>