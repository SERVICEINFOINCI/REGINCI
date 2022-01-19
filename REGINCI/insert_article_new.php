<?php
$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$Reference_article = $_POST['Ref_article'];
$Designation_article = $_POST['Designation_article'];
$Prix_unitaire = $_POST['Prix_unitaire'];
$Id_Stock =$_POST['Id_Stock'];
$Id_Client=$_POST['Id_Client'];

//On insère les données reçues dans la table
$article = $dbco->prepare("INSERT INTO article (Ref_Article, Designation_Article, Prix_Unitaire, Id_Stock,Id_Client)
VALUES(?, ?, ?,?,?)");
$article->execute(array($Ref_article, $Designation_article, $Prix_unitaire, $Id_Stock,$Id_Client));
header("Location:merci.html");


?>