
<?php
class Membre
{
    private $pseudo;
    private $prenom;
    private $email;
    private $signature;
    private $activite;
   private  $nom;

    //Connexion à la BD
    public function connexionbd()
    {
        try{
         $connexion=new PDO('mysql:host=localhost;dbname=Gestion_BD_College','root','');
        $connexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connexion->exec("SET NAMES UTF8");
        }
        catch(PDOException $err){
            die('Erreur de connexion'.$err->getMessage());
        }
        
    }
    //Construction de l'objetgf
    public function __construct($pseudo,$nom,$prenom,$email){
        /*$this->connexionbd();
        $recuperer=$this->connexionbd->prepare("SELECT * FROM eleve WHERE matricule=?");
        $exectution=$recuperer->execute(array($idMembre));
        $exectution->fetch();
        $this->pseudo=$recuperer['nomEtu'];
        $this->prenom=$recuperer['prenomEtu'];
        //$recuperer->closeCursor();*/

       $this->nom=$nom;
       $this->pseudo=$pseudo;
       $this->prenom=$prenom;
       $this->email=$email;
        }

    
    

    //Modifier des informations
    public function setInfos($newnom,$newprenom,$newemail){
        if(!empty($newnom) AND !empty($newprenom) AND !empty($email)
        AND strlen($newprenom)<=12)
        {
            $this->nom=$newnom;
            $this->prenom=$newprenom;
            $this->mail=$this->prenom.'@'.$this->nom;
        }
    }
    //Recuperation d'Informations
    public function getInfos(){
        return $this->nom;
 } 

    //Fonction d'Envoi d'un Message électronique
    public function MailSending($title,$message)
    {
        if($title!='' AND !empty($message) AND strlen($message)<=20)
        {
            mail($this->email,$title,$message);
        }
        else
        {
            if($title=='' OR $message=='')
            {
                echo ' Le Message est Vide ou Sans titre, Verifiez svp !';
            }
            elseif(strlen($message)>20)
            {
                echo 'Votre Message est trop long</br>';
            }
        }
    }
    
    public function Refus()
    {
        if($this->activite=False){
            $this->MailSending('Vous avez été rejeté','Voilà ! Vous n\'êtes actif, Donc, nous vous remercions');
        }
    } 

    public function __destruct()
    {
        echo '<br>Cet Objet va être détruit';
    }
}
?>

