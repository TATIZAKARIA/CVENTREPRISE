<?php
require_once("classes/personnage.class.php"); // require car obligatoire de l'avoir pour poursuivre l'affichage des perso
include ("common/header.php");
include ("common/menu.php");
?>
<h2>Mes personnages Poo: </h2>

<?php
$p1 = new Personnage("Luke","player.png",27,true,5,4);
$p1->templatePerso();
echo "<br/> ---------------------------------  <br/>";
$p2 = new Personnage("Katty","playerF.png",25,false,3,6);
$p2->templatePerso();
echo "<br/> ---------------------------------  <br/>";
$p3 = new Personnage("Mark","playerM.png",33,true,7,2);
$p3->templatePerso();
?>

<?php
include ("footer.php");
?>