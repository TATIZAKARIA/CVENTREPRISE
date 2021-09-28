<?php
require_once("classes/persoConst.class.php"); // require car obligatoire de l'avoir pour poursuivre l'affichage des perso
include ("common/header.php");
include ("common/menu.php");
?>
<h2>Mes personnages Poo: </h2>

<?php
$p1 = new Personnage("Luke","player.png",27,Personnage::HOMME,5,4);
$p1->templatePerso();
echo "<br/> ---------------------------------  <br/>";
$p2 = new Personnage("Katty","playerF.png",25,Personnage::FEMME,3,6);
$p2->templatePerso();
//$p2->nom = "Cléa";// le probléme ici c'est que l'on peux modifier l'information directement de ce fichier php ce qui présente un risque
$p2->setNom("Cléa");
$p2->templatePerso();
//echo $p2->nom;
echo "<br/> ---------------------------------  <br/>";
$p3 = new Personnage("Mark","playerM.png",33,Personnage::HOMME,7,2);
$p3->templatePerso();
?>

<?php
include ("footer.php");
?>