<?php



$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$codarticle = $_POST['code_art'];
$libarticle = $_POST['libelle_art'];
$prixarticle = $_POST['PU_art'];



try{
//On se connecte à la BDD
$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//On insère les données reçues dans la table
$art = $dbco->prepare("
INSERT INTO article(code_art, libelle_art, PU_art)
VALUES(?, ?, ?)");
$art->execute(array($codarticle, $libarticle, $prixarticle));
header("Location:ok_article.html");
}
catch(PDOException $e){
echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

?>