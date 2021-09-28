<?php

class Personnage{

    private static $personnages = []; 
    //public static $personnages = []; // en faisant ça maintenant la valeur et disponnible depuis la classe elle meme

    private $nom ;
    private $img ;
    private $age ;
    private $sexe ;
    private $force ;
    private $agilite ;

    const HOMME = true;
    const FEMME = false;

    function __construct($nom,$img,$age,$sexe,$force,$agilite)
    {
        $this->nom = $nom;
        $this->img = $img;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->force = $force;
        $this->agilite = $agilite;
        self::$personnages[] = $this; //self permet d'acceder a l'attribut de la classe parent
    }

    function getNom(){
        return $this->nom;
    }
    function setNom($nom){
        $this->nom = $nom;
    }
    function getImg(){
        return $this->img;
    }
    function setImg($img){
        $this->img = $img;
    }
    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age = $age;
    }
    function getSexe(){
        return $this->sexe;
    }
    function setSexe($sexe){
        $this->sexe = $sexe;
    }
    function getForce(){
        return $this->force;
    }
    function setForce($force){
        $this->force = $force;
    }
    function getAgilite(){
        return $this->agilite;
    }
    function setAgilite($agilite){
        $this->agilite = $agilite;
    }
    public static function getListePerso(){
        return self::$personnages;
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