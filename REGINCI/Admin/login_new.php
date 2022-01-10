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

    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password1'], $_REQUEST['password2'])) {
        $username = stripslashes($_REQUEST['username']);
        $email = stripslashes($_REQUEST['email']);
        $password1 = stripslashes($_REQUEST['password1']);
        $password2 = stripslashes($_REQUEST['password2']);

        // Validation on s'assurer que le formulaire est correctement remplit
        // en ajoutant (array_push ()) l'erreur correspondante au tableau $ errors

        if ($password1 != $password2) {
            array_push($errors, "Les deux mots de passe ne correspondent pas");
        }


        // on vérifie d'abord la base de données pour s'assurer
        // que l'utilisateur n'existe pas déjà avec le même nom d'utilisateur et / ou email

        $req = $dbco->prepare('SELECT * FROM users where username=? and email=? and password=?');
        $req->execute(array(
            $_POST['username'],
            $_POST['email'],
            $_POST['password1']
        ));

        $resultat = $req->fetch();

        if (!$resultat) {
            if (!$resultat['username'] == $username) {
                array_push($errors, "Ce nom d'utilisateur existe déjà");
            }

            if (!$resultat['email'] == $email) {
                array_push($errors, "l'email existe déjà");
            }
            if (!$resultat['password1'] == $password1) {
                array_push($errors, "le mot de passe existe déjà");
            }
        }

        // Finalement, on enregistre l'utilisateur s'il n'y a pas d'erreur dans le formulaire  

        if (count($errors) == 0) {
            $password = md5($password1);

            $util = $dbco->prepare("INSERT INTO users(username, email, type, password)
        VALUES(?, ?, ?, ?)");
            $util->execute(array($username, $email, $user, $password));

            echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login_exist.php'>connecter</a></p>
       </div>";
        }
    }
    ?>
    <form class="box" action="../insert_user_new.php" method="post" autocomplete="off" style="
    padding-top: 10px; width: 850px;">

        <img src="/REGINCI/images/logo.png" alt="logo" width="70px" style=" display: block;
    margin-left: auto; margin-right: auto; margin-bottom:auto ">
        <h1 class="box-title" style="
    margin-top: 10px;">BIENVENUE </h1>
        <h1 class="box-title">Nouvel utilisateur? S'inscrire ici </h1>

        <div class="container px-4">
  <div class="row gx-7">
    <div class="col">
     <div class="p-3 border bg-light" style="text-align:center;"> <input class="form-check-input" type="radio" name="sexe" id="monsieur">
            <label class="form-check-label" for="flexRadioDefault1" style=" margin-right: 30px;">
                Monsieur </label>
            <input class="form-check-input" type="radio" name="sexe" id="madame" style=" margin-left: 20px;">
            <label class="form-check-label" for="flexRadioDefault1">
                Madame </label>
            <input class="form-check-input" type="radio" name="sexe" id="mademoiselle" style=" margin-left: 30px;">
            <label class="form-check-label" for="flexRadioDefault1">
                Mademoiselle </label></div>
    </div>
    
  </div>
</div>      

        <input type="text" class="box-input" name="matricule" placeholder="Matricule" required autocomplete="off" style=" margin-top: 10px; margin-right:50px;margin-left:26px" />
        <input type="text" class="box-input" name="titre" placeholder="Titre ou fonction" required autocomplete="off" style=" margin-top: 10px;"/>
        <input type="text" class="box-input" name="prenoms" placeholder="Prénoms" required autocomplete="off" style=" margin-top: 10px; margin-right:50px;margin-left:26px" />
        <input type="text" class="box-input" name="nom" placeholder="Nom" required autocomplete="off" style=" margin-top: 10px;" />
        <input type="password" class="box-input" name="password1" placeholder="Mot de passe" required autocomplete="off" style=" margin-top: 10px; margin-right:50px;margin-left:26px" />
        <input type="text" class="box-input" name="tg" placeholder="Trésorerie Générale" required autocomplete="off" style=" margin-top: 10px;" />
        
        <input type="password" class="box-input" name="password2" placeholder="Confirmer le Mot de passe" required autocomplete="off" style=" margin-top: 10px; margin-right:50px;margin-left:26px" />


        <input type="submit" name="submit" value="S'inscrire" class="box-button" />

        <p class="box-register">Déjà inscrit?
            <a href="login_exist.php">Connectez-vous ici</a>
        </p>
    </form>
</body>

</html>