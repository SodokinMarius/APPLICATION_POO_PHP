<?php
class Card
{
  protected $name;
    protected $description;

    public function __construct($nom, $describe){
        $this->name=$nom;
        $this->description=$describe;
    }

    public function hello()
    {
        echo '<br>Salut et Bienvenue ! Moi je suis la carte '.$this->name.
        ' et caractérisée par : '. $this->description;
    }
}


class CartePiege extends Card
{
    private $effet;
    public function __construct($nom,$describe,$effet)
    {
        parent::__construct($nom,$describe);
        $this->effet=$effet;
    }

    public function hello()
    {
        echo '<br>Nom: '.$this->name;
        echo '<br>Desciption : '.$this->description;
        echo '<br> Effef:  '.$this->effet;
    }

}




//Appel aux class et methodes
$carte1=new Card('ROUGE','Moi je crée des dégats, des interruptions brusques');
$carte1->hello();


$carteExt=new CartePiege('MAGENTA','On m\'apelle pour chargement de l\'ancre dans des imprimantes ','Intention de rentdre performant');
$carteExt->hello();
?>