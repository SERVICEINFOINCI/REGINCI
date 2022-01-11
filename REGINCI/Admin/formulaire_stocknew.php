<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
</head>

<body>
    <?php
  require('../connexion_reginci.php');

 
// Initialisation des variables
 
$errors = array();
 
// Connexion à la base de données

    if (isset($_REQUEST['Date'], $_REQUEST['Libelle_article'], $_REQUEST['Quantité'], $_REQUEST['Observation']))
 {
    $Date = stripslashes($_REQUEST['Date']);
    $Libelle_article = stripslashes($_REQUEST['Libelle_article']);
    $Qunatité = stripslashes($_REQUEST['Quantité']);
    $Observation = stripslashes($_REQUEST['Observation']);
 
 
    // on vérifie d'abord la base de données pour s'assurer
    // que l'utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email
 
    $req = $dbco->prepare('SELECT * FROM stock where entrestock=? and sortistock=?');
    $req->execute(array(
    $_POST['Date'],
    $_POST['Libelle_article'],
   $_Post['Quantité'],
    $_Post['Observation']));
     
    $resultat = $req->fetch();
 
    // On enregistre les Stocks réceptionnés
 
      $stock = $dbco->prepare("INSERT INTO stock (Date,Libelle_article , Quantité, Observation)
        VALUES(?, ?, ?, ?,?)");
        $stock->execute(array($Date, $Libelle_article, 'Quantité', $Observation));

            echo "<div class='sucess'>
             <h3> Le Stock a été enregistré avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login_exist.php'>connecter</a></p>
       </div>";
        }
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title">
                GESTION DES STOCKS  </h1>
            <h1 class="box-title">Enregistrement des stocks des articles</h1>
            <input type="Date" class="box-input" name="Date" placeholder="Date" required />
            <input type="Text" class="box-input" name="Libelle_article" placeholder="Libelle article" required autocomplete="off" />

           <input type="number" class="box-input" name="Quantité" placeholder="Quantité" required autocomplete="off" />
            
            <input type="text" class="box-input" name="Observation" placeholder="Observation" required />

            <input type="submit" name="submit" value="Valider" class="box-button" />

           
        </form>
</body>

</html>