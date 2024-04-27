<?php

abstract class Personnage {
  protected $nom = "";
  protected $sante = 100;
  protected $force = 20;

  public function __construct($value = "anonyme"){
    $this -> setNom($value);
  }

  public function attaquer(Personnage $adversaire){
    $adversaire->subirDegats($this->getForce());
  }

  public function getForce(){
    return $this->force;
  }

  public function subirDegats($nombre){
    $this->setSante($this->getSante()- $nombre);
  }
  public function getSante(){
    return $this->sante;
  }
  public function setSante($value){
    if (is_numeric($value)) {
      $this->sante=$value;
    }
    if ($this-> sante <= 0 ){
      $this -> sante = 0 ;
      echo "mort";
    }
  }
  public function getNom(){
    return $this->nom;
  }
  public function setNom($value){
    $this-> nom = $value;
  }
} 

// $player1 = new Personnage("toto");

// $player2 = new Personnage("titi");

// echo $player2->getSante();
// $player1->attaquer($player2);
// $player1->attaquer($player2);
// $player1->attaquer($player2);
// echo "<br>";
// echo $player2->getSante();

// $player1 = new Personnage();
// $player2 = new Personnage();

// echo $player1->getSante();
// $player1->setSante(75);
// echo "<br>";
// echo $player1->getSante();
// $player1-> setSante("toto");
// echo "<br>";
// echo $player1->getSante();
// $player1->setSante(-20);
// echo "<br>";
// echo $player1->getSante();

class Barbare extends Personnage {
}


class Magicien extends Personnage {
  protected $magie = 50;
  protected $force = 2;
  public function attaquer(Personnage $adversaire){
    $adversaire -> subirDegats($this -> magie);
    $this -> magie -=10;
  }
}

$barbare = new Barbare("Conan");
$magicien = new Magicien("Gandalf");
echo $barbare->getSante()."<br>";
echo $magicien->getSante()."<br>";

$barbare-> attaquer($magicien);
$magicien -> attaquer($barbare);

echo $barbare->getSante()."<br>";
echo $magicien->getSante()."<br>";

var_dump($magicien);