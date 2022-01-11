<?php


require('../connexion_reginci.php');


//recuperer les information du formulaire
$code = $_POST['Code_TG'];
$libelle = $_POST['Libelle_TG'];
$contacttg = $_POST['Contact_TG'];

echo $code.' '.$libelle.$contact;

//On insère les données reçues dans la table
$tg = $dbco->prepare("
INSERT INTO tg(Code_TG, Libelle_TG, Contact_TG)
VALUES(?, ?, ?)");
$tg->execute(array($code, $libelle, $contacttg));
header("Location:merci.html");


?>