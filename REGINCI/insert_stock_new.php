<?php

require('connexion_reginci.php');

//recuperer les information du formulaire
$Date = $_POST['Date'];
$Libelle_article = $_POST['Libelle_article'];
$Quantite = $_POST['Quantite'];
$Observation=$_POST['Observation'];

echo $Date.' '.$Libelle_article.$Quantite.$Observation;

//On insère les données reçues dans la table
$Stock = $dbco->prepare("INSERT INTO stock (Date, Libelle_article, Quantite, Observation)
VALUES(?, ?, ?,?)");
$Stock->execute(array($Date, $Libelle_article, $Quantite, $Observation));
header("Location:merci.html");

?>