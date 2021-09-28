<?php

class Personnage{
    public $nom = "Luke";
    public $img = "player.png";
    public $age = 27;
    public $sexe = true;
    public $force = 5;
    public $agilite = 4;
}


include ("common/header.php");
include ("common/menu.php");
?>
<h2>Mes personnages Poo: </h2>

<?php
$p1 = new Personnage();
echo "Nom: ". $p1->nom ."<br/>";
echo "Age: ". $p1->age ."<br/>";
$p2 = new Personnage();
$p2->nom = "Katy";
$p2->age = 25;
echo "Nom: ". $p2->nom ."<br/>";
echo "Age: ". $p2->age ."<br/>";
?>

<?php
include ("footer.php");
?>