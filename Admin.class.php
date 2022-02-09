<?php
include_once("Programmation_Orienté_Debut.php");

class Admin extends Membre
{
    private $couleur;

    public function setColor($couleur)
    {
        $this->couleur=$couleur;
    }

    public function getcolor($couleur)
    {
        return $this->$couleur;
    }
}
?>