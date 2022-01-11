<?php
$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$Reference_article = $_POST['Reference_article'];
$Designation_article = $_POST['Designation_article'];
$Prix_Unitaire = $_POST['Prix_Unitaire'];
$Id_Stock=$_Post['Id_Stock'];


try{
//On se connecte à la BDD
$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//On insère les données reçues dans la table
$article = $dbco->prepare("INSERT INTO article(Reference_article, Designation_article, Prix_unitaire,Id_Stock)
VALUES(?, ?, ?,?)");
$article->execute(array($Reference_article, $Designation_article, $Prix_Unitaire,$Id_Stock));
header("Location:ok_article.html");
}
catch(PDOException $e){
echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

?>