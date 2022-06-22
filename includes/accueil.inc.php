<h1>Accueil</h1>
<?php
$personne = new Utilisateur("DUPONT");
//$personne->mangerDesFrites("orange", "bannane", "kiwi");
//$personne->taille = 180;
//echo $personne("michel");
$habitant = clone $personne;
dump($habitant);

