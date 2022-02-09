<?php session_start()?>
<!Doctype html>
<html>
    <body>
        <head>
            <title>Anne bixectille</title>
            <meta name="viewport" content="width=device,initial-scale=1.0">
            <meta charset="UTF-8"/>
</head>
<body>
    <form action="Annee bixextile.php" method="POST">
        
        <fielset>
            <legend>Saisie </legend>
            <label for="annee"> Saisir l\'annee :</label>
            <div class="form-group">
            <input type="number" name="annee" placeholder="Valleur supérieure à 0" class="form-control">
            </div>
            <button type="summit" class="btn btn-primary">Valider</button>
</fielset>
</form>
<?php 
if((isset($_POST['annee'])) AND (!empty($_POST['annee']))){

 if(($_POST['annee']%4==0) AND ($_POST['annee']%100!=0) OR ($_POST['annee']%400==0)){
 
    echo '<div class="alert alert-success">';
   echo ' <strong>L\' année est bixesstille</strong><br>';
   echo '</div>';
 }
 else{
    echo '<div class="alert alert-danger">';
    echo '  <strong>L\'année est non bixesstille</strong><br>';
    echo '</div>';
 }
}
else {
   echo ' <strong>Veuillez renseigner une valeure</strong><br>';

}
?>
<u><strong>Les années bixesstilles dans 50000 années suivantes <br></strong></u>
<?php 
for($i=$_POST['annee'];$i<$_POST['annee']+500000;$i++) {
 if(($i%4==0 AND $i%100!=0) OR ($i%400==0)){
    echo  $i.' <br>' ;  
 }
}
?>

 
</body>
</html>