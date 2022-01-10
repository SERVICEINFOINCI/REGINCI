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
    $code = stripslashes($_REQUEST['code']);
    $libelle= stripslashes($_REQUEST['libelle']);
    $contact = stripslashes($_REQUEST['contact']);
    
 
    // Validation on s'assurer que le formulaire est correctement remplit
    // en ajoutant (array_push ()) l'erreur correspondante au tableau $ errors
 
    if ($password1 != $password2) 
    {
    array_push($errors, "Les deux mots de passe ne correspondent pas");
    }
 
 
    // on vérifie d'abord la base de données pour s'assurer
    // que l'utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email
 
    $req = $dbco->prepare('SELECT * FROM TG where code=? and libelle=? and contact=?');
    $req->execute(array(
    $_POST['code'],
    $_POST['libelle'],
    $_POST['contact']));
     
    $resultat = $req->fetch();
 
    if (!$resultat)
    {
        if (!$resultat['code'] == $code) 
        {
        array_push($errors, "Ce nomcode  existe déjà");
        }
    
        if (!$resultat['libelle'] == $libelle)
        
         {
        array_push($errors, "libelle existe déjà");
        }
        if (!$resultat['contact'] == $contact) {
        array_push($errors, "le conatct existe déjà");
        }
    }
 
    // Finalement, on enregistre l'utilisateur s'il n'y a pas d'erreur dans le formulaire  
 
    if (count($errors) == 0)
    {
     $password = md5($password1);
 
      $util = $dbco->prepare("INSERT INTO TG(Code_TG,Libelle_TG,Contact_TG)
        VALUES(?, ?, ?)");
        $util->execute(array($code, $libelle,$contact));

            echo "<div class='sucess'>
             <h3> La TG est enrégistrée avec succès.</h3>
       </div>";
        }}
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