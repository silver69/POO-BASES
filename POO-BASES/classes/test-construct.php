<?php
class Chien_2{

public string $nom;
public int $age;
public string $race;

function __construct($nom, $age, $race){
    $this->nom=$nom;
    $this->age=$age;
    $this->race=$race;
}
function get_nom (){
return $this->nom;
}

function get_age(){
    return $this->age;
}

function get_race(){
    return $this->race;
}
}
$pam = new Chien_2("Pam", '15', "Yorkshire") ;

$mina = new Chien_2( "Mina", '5', 'Yorkshire');

$hok = new Chien_2( "Hok", '12', 'Jack Russell');


echo "Nom : ".  $pam->get_nom() . " - Age : ". $pam->get_age(). " - Race : " . $pam->get_race();
echo "<br>";
echo "Nom : ".  $mina->get_nom() . " - Age : ". $mina->get_age(). " - Race : " . $mina->get_race();
echo "<br>";
echo "Nom : ".  $hok->get_nom() . " - Age : ". $hok->get_age(). " - Race : " . $hok->get_race();
?>