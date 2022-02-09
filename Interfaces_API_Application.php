<?php
Interface IOrdinateur
{
    public function presentation();
    public function caracteristiques();
    public function sauvegardeStock();
    public function supressionPoste();
    public function PointDeConsommation($prix_unit,$stock);
    const stock_total=1500;

}

class Ordinateur_Portatif Implements IOrdinateur
{
    
    public function presentation()
    {
        echo '<br><strong>Un ordinateur est une matchine 
        électronique programmable qui traite automatiquement des Informations 
        en execution les instructions du programmeur
        </strong>';
    }

    public function caracteristiques()
    {
         echo '<br>Nous vous afficherons bientot les caractéristiques des machines<br>';
    }

    public function sauvegardeStock()
    {
        echo '<br>Aucun Ordinateur pour le moment';
    }

    public function supressionPoste()
    {
        echo '<br>Nous n\'avons trouvé aucun poste pour le moment<br>';
    }

    public function PointDeConsommation($prix_unit='250000 FCFA',$stock='200 Poste')
    
    {
        echo '<br>Le Prix : '. $prix_unit.' <br> Le stock disponible : ' .$stock .'<br> ';
    }
}

$del=new Ordinateur_portatif;
$del->presentation();
$del->caracteristiques();
$del->PointDeConsommation();
echo '<br><br> Mais le stock total de depart est : '.IOrdinateur::stock_total;
$del->sauvegardeStock();
$del->supressionPoste();

?>