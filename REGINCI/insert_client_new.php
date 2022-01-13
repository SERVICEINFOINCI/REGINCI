<?php

require('connexion_reginci.php');

//recupérer les information du formulaire


$Matricule= $_POST['Mat_Client'];
$Prenom = $_POST['Prenom_Client'];
$Nom = $_POST['Nom_Client'];
$Contact =$_POST['Contact_Client'];

echo $Matricule.' '.$Prenom.$Nom.$Contact;

//On insère les données reçues dans la table
$client = $dbco->prepare ("INSERT INTO client (Mat_Client,Prenom_Client, Nom_Client, Contact_Client)
VALUES(?, ?, ?,?)");
$client->execute (array ($Matricule,$Prenom,$Nom,$Contact));
header("Location:merci.html");

?>