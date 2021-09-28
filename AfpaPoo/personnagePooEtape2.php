<?php

class Personnage{
    public $nom = "Luke";
    public $img = "player.png";
    public $age = 27;
    public $sexe = true;
    public $force = 5;
    public $agilite = 4;

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
$p1 = new Personnage();
$p1->templatePerso();
/* echo "Nom: ". $p1->nom ."<br/>";
echo "Age: ". $p1->age ."<br/>"; */
echo "<br/> ---------------------------------  <br/>";
$p2 = new Personnage();
$p2->nom = "Katy";
$p2->img = "playerF.png";
$p2->age = 25;
$p2->sexe = false;
$p2->force = 3;
$p2->agilite = 6;
$p2->templatePerso();
/* echo "Nom: ". $p2->nom ."<br/>";
echo "Age: ". $p2->age ."<br/>"; */
?>

<?php
include ("footer.php");
?>