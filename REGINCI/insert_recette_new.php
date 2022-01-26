<?php
require('../REGINCI/connexion_reginci.php');

//recuperer les information du formulaire

$Date= $_POST['Date'];
$Libelle_article = $_POST['Libelle_article'];
$Quantite = $_POST['Quantité'];
$Montant =$_POST['Montant'];
$Observation=$_POST['Observation'];



//On insère les données reçues dans la table

$article = $dbco->prepare("INSERT INTO recette(Quantite, Date, Montant, Observation)
VALUES(?, ?, ?, ?)");
$article->execute(array($Quantite, $Date, $Montant, $Observation));
header("Location:merci.html");


?>