<?php
    require('../REGINCI/connexion_reginci');
    //recupérer les information du formulaire
    $Matricule_Client= $_POST['Matricule'];
    $Prenom_Client = $_POST['Prenom'];
    $Nom_Client = $_POST['Nom'];
    $Contact_Client =$_POST['Contact'];

        //On insère les données reçues dans la table
    $client = $dbco->prepare ("INSERT INTO client (Id_Client,Matricule_Client, Prenom_Client, Nom_Client, Contact_Client)
    VALUES(?,?,?,?,?)");
    $client->execute (array ($Matricule,$Prenom,$Nom,$Contact));
    header("Location:merci.html");

?>