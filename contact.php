<?php
include("lib.php");

$blueprint = new person();

echo $blueprint->name."<br>";
// dynamic data sow
echo $blueprint->personDetails("Rangpur, Bangladesh ", "Bablu ",  "Sanafa")."<br>";
echo $blueprint->personDetails("Sylhet, Bangladesh ", "Nabi ", "Mukta")."<br>";

?>