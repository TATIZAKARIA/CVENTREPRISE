<?php

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
?>