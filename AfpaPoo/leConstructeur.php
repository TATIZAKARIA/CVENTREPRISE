<?php

use Personnage as GlobalPersonnage;

class Personnage{
    public $nom ;
    public $img ;
    public $age ;
    public $sexe ;
    public $force ;
    public $agilite ;

    function __construct($nom,$img,$age,$sexe,$force,$agilite)
    {
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
    }

    public function afficherInfos(){
        echo "Nom: ". $this->nom . "<br/>";
        echo "Age: ". $this->age . "<br/>";
        echo "Sexe: ";
        if($this->sexe){
            echo "homme <br/>";
        }else{
            echo "femme <br/>";
        }
        echo "Force: ". $this->force . "<br/>";
        echo "Agilité: ". $this->agilite . "<br/>";
    }
    public function templatePerso(){
        echo "<div class='gauche'>";
        echo "<img src='sources/images/".$this->img."' alt='".$this->img."'>";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }
}


include ("common/header.php");
include ("common/menu.php");
?>
<h2>Mes personnages Poo: </h2>

<?php
$p1 = new Personnage("Luke","player.png",27,true,5,4);
$p1->templatePerso();
/* echo "Nom: ". $p1->nom ."<br/>";
echo "Age: ". $p1->age ."<br/>"; */
echo "<br/> ---------------------------------  <br/>";
$p2 = new Personnage("Katty","playerF.png",25,false,3,6);
/* $p2->nom = "Katy";
$p2->age = 25;
$p2->sexe = false;
$p2->force = 3;
$p2->agilite = 6;
$p2->img = "playerF.png"; */
$p2->templatePerso();
echo "<br/> ---------------------------------  <br/>";
/* echo "Nom: ". $p2->nom ."<br/>";
echo "Age: ". $p2->age ."<br/>"; */
$p3 = new Personnage("Mark","playerM.png",33,true,7,2);
$p3->templatePerso();
?>

<?php
include ("footer.php");
?>