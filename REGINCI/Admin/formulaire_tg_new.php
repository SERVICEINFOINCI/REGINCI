<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
</head>

<body>
    <?php
  require('connexion_reginci.php');

 
// Initialisation des variables
 
$errors = array();
 
// Connexion à la base de données

    if (isset($_REQUEST['code'], $_REQUEST['libelle'], $_REQUEST['contact']))
 {
    $code = stripslashes($_REQUEST['Code_tg']);
    $libelle= stripslashes($_REQUEST['Libelle_tg']);
    $contact = stripslashes($_REQUEST['Contact_tg']);
 
      $util = $dbco->prepare("INSERT INTO TG(Code_TG,Libelle_TG,Contact_TG)
        VALUES(?, ?, ?)");
        $util->execute(array($code, $libelle,$contact));

            echo "<div class='sucess'>
             <h3> La TG est enrégistrée avec succès.</h3>
       </div>";
        }
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-logo box-title">
                GESTION DES GUICHETS DES TG </h1>
            <h1 class="box-title">Nouvelle TG? Enregister ici </h1>
            <input type="text" class="box-input" name="Code_tg" placeholder="Code tg" required autocomplete="off" />

            <input type="text" class="box-input" name="Libelle_tg" placeholder="Libelle" required />

            <input type="text" class="box-input" name="Contact_tg" placeholder="Contact" required autocomplete="off" />

            <input type="submit" name="submit" value="Valider" class="box-button" />

           
        </form>
</body>

</html>