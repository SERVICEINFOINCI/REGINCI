<?php


require('connexion_reginci.php');


//recuperer les information du formulaire
        

$code = $_POST['code'];
$libelle = $_POST['libelle'];
$contact = $_POST['contact'];



echo $Id_TG.' '.$Code_TG.$Libelle_TG.$Contact_TG;


//On insère les données reçues dans la table
$tg = $dbco->prepare("INSERT INTO tg(Id_TG, Code_TG,Libelle_TG, Contact_TG)
VALUES(?, ?, ?, ?)");
$user->execute(array($Id,$code,$libelle,$contact));

header("Location:merci.html");


?>