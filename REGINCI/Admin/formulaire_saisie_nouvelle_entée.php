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

    if (isset($_REQUEST['Date'], $_REQUEST['Libelle_article'], $_REQUEST['Quantite'], $_REQUEST['Observation']))
 {
    $Date = stripslashes($_REQUEST['Date']);
    $Libelle_article = stripslashes($_REQUEST['Libelle_article']);
    $Qunatite = stripslashes($_REQUEST['Quantite']);
    $Observation = stripslashes($_REQUEST['Observation']);
 
 
    // on vérifie d'abord la base de données pour s'assurer
    // que l'utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email
 
    $req = $dbco->prepare('SELECT * FROM Stock where Date=? and Libelle_articles=? and Quantite=? and Observation=?');
    $req->execute(array(
        $_POST['Date'],
        $_POST['Libelle_article'],
        $_Post['Quantite'],
        $_Post['Observation']));
     
    $resultat = $req->fetch();
 
    // On enregistre les Stocks réceptionnés
 
      $Stock = $dbco->prepare("INSERT INTO Stock (Date,Libelle_article , Quantite, Observation)
        VALUES(?, ?, ?, ?)");
        $Stock->execute(array($Date, $Libelle_article, $Quantite, $Observation));

            echo "<div class='sucess'>
             <h3> Le Stock a été enregistré avec succès.</h3>
             <p>Cliquez ici pour vous <a href='../insert_stock_new.php'>connecter</a></p>
       </div>";
        }
    ?>
        <form class="box" action="../insert_stock_new.php" method="post" autocomplete="off" style="
          padding-top: 10px; width: 850px;">
            <h1 class="box-title">SAISIE DES ENTREES EN STOCKS</h1>
            <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
  <div>
                    
        </form>
</body>

</html>