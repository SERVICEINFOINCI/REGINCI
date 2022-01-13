<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
    <link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
</head>

<body>
    <?php
  require('../connexion_reginci.php');

 
// Initialisation des variables
 
$errors = array();
 
// Connexion à la base de données

    if (isset($_REQUEST['Mat_Client'], $_REQUEST['Prenom_Client'], $_REQUEST['Nom_Client'], $_REQUEST['Contact_Client']))
 {
    $Mat_Client= stripslashes($_REQUEST['Matricule']);
    $Prenom_Client= stripslashes($_REQUEST['Prenom']);
    $Nom_Client= stripslashes($_REQUEST['Nom']);
    $Contact_Client= stripslashes($_REQUEST['Contact_Client']);
 
 
    // on vérifie d'abord la base de données pour s'assurer
    // que l'utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email
 
    $req = $dbco->prepare('SELECT * FROM client where Mat_Client=? and Prenom_Client=? and Nom_Client=? and Contact_Client?');
    $req->execute(array(
    $_POST['Matricule'],
    $_POST['Prenom_Client'],
    $_POST['Nom_Client'],
     $_Post['Contact_Client']));
     
    $resultat = $req->fetch();
 
    if (!$resultat)
    {
        if (!$resultat['Matricule'] == $Matricule) 
        {
        array_push($errors, "Cet matricule existe déjà");
        }
    
        if (!$resultat['Prenom_Client'] == $Prenom_Client)
        array_push($errors, "Ce client existe déjà");
        }
        if (!$resultat['Nom_Client'] == $Nom_Client)
        array_push($errors, "Ce client existe déjà");
        }
 
 
    // On enregistre les articles dans le formulaire  
 
           $client = $dbco->prepare("INSERT INTO client ((Mat_Client,Prenom_Client, Nom_Client, Contact_Client)
           VALUES(?, ?, ?,?)");
        $client->execute(array($Mat_Client, $Prenom_Client, $Nom_Client, $Contact_Client));

            echo "<div class='success'>
             <h3> Le Client est enregistré avec succès.</h3>
             <p>clique's ici pour vous <a href='../insert_client_new.php'>connecter</a></p>
       </div>";
        
    ?>
         <form class="box" action="../insert_client_new.php" method="POST" autocomplete="off" style="
          padding-top: 10px; width: 850px;">
                GESTION DES CLIENTS </h1>
            <h1 class="box-title">Enregistrement des clients</h1>

            <input type="text" class="box-input" name="Matricule" placeholder="Matricule" required autocomplete="off" />

            <input type="text" class="box-input" name="Prenom" placeholder="Prenom" required />

            <input type="text" class="box-input" name="Nom" placeholder="Nom" required autocomplete="off" />
            
            <input type="number" class="box-input" name="Contact" placeholder="Contact" required autocomplete="off" />


            <input type="submit" name="submit" value="Valider" class="box-button" />

            
           
        </form>
</body>

</html>