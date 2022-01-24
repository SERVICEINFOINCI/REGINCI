<?php
$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$Reference_article= $_POST['Reference'];
$Designation_article = $_POST['Designation'];
$Prix_unitaire = $_POST['Prix'];
$Id_Stock =$_POST['Stock'];
$Id_Client=$_POST['Client'];

echo $Reference_article.' '.$Designation_article.$Prix_unitaire.$Id_Stock.$Id_Client;

//On insère les données reçues dans la table

$article = $dbco->prepare("INSERT INTO article (Id_Article,Reference_Article, Designation_Article, Prix_Unitaire, Id_Stock,Id_Client)
VALUES(?, ?, ?, ?, ?, ?)");
$article->execute(array($Reference_article, $Designation_article, $Prix_unitaire, $Id_Stock,$Id_Client));
header("Location:merci.html");


?>