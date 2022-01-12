<?php
$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$Reference_article = $_POST['Reference_article'];
$Designation_article = $_POST['Designation_article'];
$Prix_unitaire = $_POST['Prix_unitaire'];
$Id_Stock =$_POST['Id_Stock'];

//On insère les données reçues dans la table
$article = $dbco->prepare("INSERT INTO article (Reference_Article, Designation_Article, Prix_Unitaire, Id_Stock)
VALUES(?, ?, ?,?)");
$article->execute(array($Reference_article, $Designation_article, $Prix_unitaire, $Id_Stock));
header("Location:merci.html");


?>