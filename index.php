<?php
include("lib.php");

$blueprint = new person(); // object

// property call
echo $blueprint->name."<br>";
echo $blueprint->email."<br>";
echo $blueprint->cell."<br>";
echo $blueprint->website."<br>";

// function ba method call
echo $blueprint->functionBirthdayPlace()."<br>";

// dynamic data sow
echo $blueprint->personDetails("Rangpur, Bangladesh ", "Bablu ",  "Sanafa")."<br>";
echo $blueprint->personDetails("Sylhet, Bangladesh ", "Nabi ", "Mukta")."<br>";


?>