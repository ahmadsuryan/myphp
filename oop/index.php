
<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new Animal("shaun");

echo "Animal, name : ".$sheep->get_name()."<br>"; // "shaun"
echo "Legs : ".$sheep->get_legs()."<br>"; // 2
echo "cold blooded : ".$sheep->get_cold_blooded()."<br><br>"; // false

$sungokong = new Ape("kera sakti");
echo "Ape, name : ".$sungokong->get_name()."<br>"; 
echo "Legs : ".$sungokong->get_legs()."<br>"; 
echo "cold blooded : ".$sungokong->get_cold_blooded()."<br>"; // false
echo "Yell : ";
$sungokong->yell(); // "Auooo"
echo "<br><br>"; 

$kodok = new Frog("buduk");
echo "Frog, name : ".$kodok->get_name()."<br>"; 
echo "Legs : ".$kodok->get_legs()."<br>"; 
echo "cold blooded : ".$kodok->get_cold_blooded()."<br>"; // false
echo "Jump : ";
$kodok->jump() ; // "hop hop"
echo "<br>"; 


?>
