<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
    <link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    
</head>

<body>
    <?php
    require('../connexion_reginci.php');


    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
       
        // récupérer le nom d'utilisateur 
        $username = stripslashes($_REQUEST['username']);
        //$username = mysqli_real_escape_string($dbco, $username); 
        //mysqli_real_escape_string — Protège les caractères spéciaux d'une chaîne pour l'utiliser dans une requête SQL, en prenant en compte le jeu de caractères courant de la connexion
        // récupérer l'email 
        $email = stripslashes($_REQUEST['email']);
        // $email = mysqli_real_escape_string($dbco, $email);
        // récupérer le mot de passe 
        $password = stripslashes($_REQUEST['password']);
        // $password = mysqli_real_escape_string($dbco, $password);

        // $query = "INSERT into `users` (username, email, type, password)
        //   VALUES ('$username', '$email', 'user', '".hash('sha256', $password)."')";
        // $res = mysqli_query($dbco, $query);
        $util = $dbco->prepare("
      INSERT INTO users(username, email, type, password)
       VALUES(?, ?, ?, ?)");
        $util->execute(array($username, $email, 'user', $password));
    } else {
    ?>
<div class="marquee-rtl">
    <!-- le contenu défilant -->
    <div style="margin-top: 15px;font-size:25px; color:green">RESEAU DE GESTION DES GUICHETS DE L'IMPRIMERIE NATIONALE DANS LES TRESORERIES GENERALES DE CÔTE D'IVOIRE.</div>
</div>

        <form class="box" action="" method="post" autocomplete="off" style="
    padding-top: 10px;
">
            <img src="/REGINCI/images/logo.png" alt="logo" width="70px" style=" display: block;
    margin-left: auto; margin-right: auto; margin-bottom:auto ">
            <h1 class="box-title" style="margin-top: 10px;">BIENVENUE </h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur ou mot de passe" required autocomplete="off" />
            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

            <input type="submit" name="submit" value="Se connecter" class="box-button" />

            <p class="box-register">Vous êtes nouveau?
                <a href="login_new.php">Inscrivez-vous ici</a>
            </p>
        </form>
    <?php } ?>
</body>

</html>