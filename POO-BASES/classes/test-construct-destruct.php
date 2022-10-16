<?php
class Chien_3{

public string $nom;
public int $age;
public string $race;

function __construct($nom, $age, $race){
    $this->nom=$nom;
    $this->age=$age;
    $this->race=$race;
}
function __destruct(){
    echo "Nom :  {$this->nom} - Age: { $this->age} - Race : {$this->race} <br>";
}
}
$pam = new Chien_3("Pam", '15', "Yorkshire") ;

$mina = new Chien_3( "Mina", '5', 'Yorkshire');

$hok = new Chien_3( "Hok", '12', 'Jack Russell');



?>