<?php
require('../connexion_reginci.php');
//recupérer les information du formulaire

$Matricule_Client= $_POST['Matricule'];
$Prenom_Client = $_POST['Prenom'];
$Nom_Client = $_POST['Nom'];
$Contact_Client =$_POST['Contact'];

echo $Matricule.' '.$Prenom.$Nom.$Contact;

//On insère les données reçues dans la table
$client = $dbco->prepare ("INSERT INTO client (Matricule_Client, Prenom_Client, Nom_Client, Contact_Client)
VALUES(?, ?, ?,?)");
$client->execute (array ($Matricule,$Prenom,$Nom,$Contact));
header("Location:merci.html");

?>