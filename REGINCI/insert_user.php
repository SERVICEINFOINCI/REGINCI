
<?php
require('connexion.php');

//recuperer les information du formulaire

$matricule_client=$_POST['mat_client'];
$nom = $_POST['nom_client'];
$prenom = $_POST['pren_client'];
$email = $_POST['email_client'];
$contact = $_POST['contact_client'];

//echo $nom.' '.$prenom.' '.$email.' '.$contact;

//On insère les données reçues dans la table
$client = $dbco->prepare("
INSERT INTO client( Matricule_Client, Nom_Client, Prenom_Client,  Email, Contact_Client)
VALUES(?, ?, ?, ?, ? )");
$client->execute(array($matricule_client, $nom, $prenom,  $email ,$contact));
header("Location:ok-client.html");


?>