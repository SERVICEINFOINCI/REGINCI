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

    if (isset($_REQUEST['Reference_article'], $_REQUEST['Designation_article'], $_REQUEST['Prix_Unitaire'], $_REQUEST['Id_Stock']))
 {
    $Reference_article = stripslashes($_REQUEST['Reference_article']);
    $Designation_article= stripslashes($_REQUEST['Designation_article']);
    $Prix_Unitaire = stripslashes($_REQUEST['Prix_Unitaire']);
    $Id_Stock = stripslashes($_REQUEST['Id_Stock']); 
 
    // on vérifie d'abord la base de données pour s'assurer
    // que l'utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email
 
    $req = $dbco->prepare('SELECT * FROM article where Reference_article=? and Designation_article=? and Prix_Unitaire=? and Id_Stock?');
    $req->execute(array(
    $_POST['Reference_article'],
    $_POST['Designation_article'],
    $_POST['Prix_Unitaire'],
     $_Post['Id_Stock']));
     
    $resultat = $req->fetch();
 
    if (!$resultat)
    {
        if (!$resultat['Reference_article'] == $Reference_article) 
        {
        array_push($errors, "Cette réference existe déjà");
        }
    
        if (!$resultat['Designation_Article'] == $Designation_Article)
        array_push($errors, "Cette désignation existe déjà");
        }
 
    // On enregistre les articles dans le formulaire  
 
           $article = $dbco->prepare("INSERT INTO article (Reference_Article, Designation_Article, Prix_Unitaire, Id_Stock)
        VALUES(?, ?, ?, ?)");
        $util->execute(array($Reference_Articles, $Designation_article, $Prix_Unitaire, $Id_Stock));

            echo "<div class='success'>
             <h3> Article enregistré avec succès.</h3>
             <p>clique's ici pour vous <a href='../insert_article_new.php'>connecter</a></p>
       </div>";
        }
    ?>
        <div class="container">
    
      <nav>
        <h1>Liste des entrées en stock :</h1>
        <ul class="nav nav-fill">
          <li class="nav-item"><a class="nav-link" href="#">Nouvelle entréé</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Consulter les entrées</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Recherche d'Entrée</a></li>
          <li class="nav-item"><a class="nav-link " href="#">Imprimer</a></li>
        </ul>
      </nav>
      <br>
      <nav> 
        <h3>Liste de toutes les entrées en stock :</h3>
        <ul class="nav nav-justified">
          <li class="nav-item"><a class="nav-link" href="#">Date (Entrée)</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Reference (Article)</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Designation (Article)</a></li>
          <li class="nav-item"><a class="nav-link " href="#">Quantite (Entrée)</a></li>
          <li class="nav-item"><a class="nav-link " href="#">Saisir par:---</a></li>
        </ul>
      </nav>
    </div>
           
        
</body>

</html>