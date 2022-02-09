<?php
abstract class Ordinateur
{
     abstract protected function caracteristiques($hdd,$ram,$cpu);
}
     class Ordinateur_portable extends Ordinateur 
     {
         public function caracteristiques($hdd='500Go',$ram='8Go',$cpu='Dual core')
         {
             echo '<br>Disque dur : '.$hdd;
             echo '<br> Memoire RAM : '.$ram;
             echo ' <br> Processeur : '.$cpu;
         }
     }

     //Appels
     $hp=new Ordinateur_portable;
     $hp->caracteristiques();
?>