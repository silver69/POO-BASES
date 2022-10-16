<?php
class Chien{

public string $nom;
public int $age;
public string $race;

function set_nom ($nom){
    $this->nom=$nom;
}
function get_nom (){
return $this->nom;
}
function set_age($age){
    $this->age =$age;
}
function get_age(){
    return $this->age;
}
function set_race($race){
    $this->race=$race;
}
function get_race(){
    return $this->race;
}
}
$pam = new Chien();
$pam->set_nom ('Pam');
$pam->set_age (15);
$pam->set_race ('Yorkshire');
$mina = new Chien();
$mina->set_nom ('Mina');
$mina->set_age (5);
$mina->set_race ('Yorkshire');
$hok = new Chien();
$hok->set_nom ('Hok');
$hok->set_age (12);
$hok->set_race ('Jack Russell');

echo "Nom : ".  $pam->get_nom() . " - Age : ". $pam->get_age(). " - Race : " . $pam->get_race();
echo "<br>";
echo "Nom : ".  $mina->get_nom() . " - Age : ". $mina->get_age(). " - Race : " . $mina->get_race();
echo "<br>";
echo "Nom : ".  $hok->get_nom() . " - Age : ". $hok->get_age(). " - Race : " . $hok->get_race();
?>