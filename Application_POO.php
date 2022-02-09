<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once("Programmation_Orienté_Debut.php");
    include_once("Admin.class.php");

    $membre=new Membre('SODYAM','SODOKIN','Yao Marius','yaomariussodokin@gmail.com');
$membre->MailSending('Remerciement','ouiddddddddddddffffdddddddddd');

$Administrateur=new Admin('DOTO','SOGNON Gerard','Rogert','rogerts@yahoo.fr');
$Administrateur->setcolor('Vert');

echo $Administrateur->getInfos().' est votre administrateur <br>';

echo $membre->getInfos(). ' Nous allons vous retirer '. $membre->Refus(); 
$Administrateur->setInfos('Rouge','Supprimer','Vas y');
echo '<br>Je suis desormais '.$Administrateur->getInfos();    ?>
    
</body>
</html>