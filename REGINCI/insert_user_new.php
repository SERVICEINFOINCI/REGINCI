<?php


require('conexion_reginci.php');


//recuperer les information du formulaire
        

$civilite = $_POST['sexe'];
$matricule = $_POST['matricule'];
$prenom = $_POST['prenoms'];
$nom= $_POST['nom'];
$titre= $_POST['titre'];
$tresorerie = $_POST['tg'];
$password= $_POST['password2'];


echo $civilite.' '.$matricule.$prenom.$nom.$titre.$tresorerie.$password1.$password;


//On insère les données reçues dans la table
/*$user = $dbco->prepare("
INSERT INTO user(Civilite, Matricule_User, Nom_User, Prenom_User, Titre_User,Id_TG,Pasword)
VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
$user->execute(array($civilite, $matricule, $nom, $prenom, $titre, $tresorerie,$pasword));*/

header("Location:ok_user.html");


?>