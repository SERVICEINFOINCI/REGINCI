<?php
$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$Date = $_POST['Date'];
$libelle = $_POST['Libelle_article'];
$Quantite= $_POST['Quantité'];
$Montant =$_POST['Montant'];
$Observation=$_POST['Observation'];

//On insère les données reçues dans la table
$recette = $dbco->prepare("INSERT INTO recette (Date, Libelle_article, Quantite, Montant,Observation)
VALUES(?,?,?,?,?)");
$recette->execute(array($Date, $Libelle_article, $Quantite, $Montant,$Observation));
header("Location:merci.html");


?>