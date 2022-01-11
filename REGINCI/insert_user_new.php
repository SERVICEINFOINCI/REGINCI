<?php


require('connexion_reginci.php');


//recupérer les informations du formulaire
        
$civilite = $_POST['sexe'];
$matricule = $_POST['matricule'];
$prenom = $_POST['prenoms'];
$nom= $_POST['nom'];
$titre= $_POST['titre'];
$tresorerie = $_POST['tg'];
$password= $_POST['password2'];


echo $civilite.' '.$matricule.$prenom.$nom.$titre.$tresorerie.$password;


//On insère les données reçues dans la table
$user = $dbco->prepare("INSERT INTO user(Civilite, Matricule_User,Nom_User, Prenom_User,Titre_User,Id_TG,Password)
VALUES(?, ?, ?, ?, ?, ?, ?)");
$user->execute(array($civilite,$matricule,$prenom,$nom,$titre,$tresorerie,$password));

header("Location:merci.html");


?>