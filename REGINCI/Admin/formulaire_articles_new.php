<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
    <link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
</head>

<body>
    <?php
 require('../connexion_reginci.php');
    ?>
         <form class="box" action="../insert_article_new.php" method="POST" autocomplete="off" style="
          padding-top: 10px; width: 850px;">
                GESTION DES ARTICLES DE L'INCI </h1>
            <h1 class="box-title">Enregistrement des articles</h1>
            <input type="text" class="box-input" name="Reference_article" placeholder="Reference article" required autocomplete="off" />

            <input type="text" class="box-input" name="Designation_article" placeholder="Designation" required />

            <input type="number" class="box-input" name="Prix_unitaire" placeholder="Prix unitaire" required autocomplete="off" />
            
            <input type="number" class="box-input" name="Id_Stock" placeholder="Id_Stock" required autocomplete="off" />

            <input type="number" class="box-input" name="Id_Client" placeholder="Id_Client" required autocomplete="off" />


            <input type="submit" name="submit" value="Valider" class="box-button" />

            
           
        </form>
</body>

</html>