<?php



$serveur = "localhost";
$dbname = "reginci";
$user = "root";
$pass = "";
//recuperer les information du formulaire

$username = $_POST['username'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2=$_POST['password2'];



try{
//On se connecte à la BDD
$dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//On insère les données reçues dans la table
$user = $dbco->prepare("
INSERT INTO user(Id_User, Matricule_User, Nom_User, Prenom_User, Titre_User, Id_TG)
VALUES(?, ?, ?, ?, ?, ?)");
$user->execute(array( $Matricule, $Nom,$Prenom,$Titre,$TG));
header("Location:ok_user.html");
}
catch(PDOException $e){
echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
}

?>