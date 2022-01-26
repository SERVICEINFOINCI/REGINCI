<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
<link rel="stylesheet" href="/REGINCI/bootstrap-5.1.3-dist/css/style local.css" />
</head>

<body>
    <?php
  require('../connexion_reginci.php');

    ?>
        <form class="box" action="../insert_recette_new.php" method="POST" autocomplete="off" style="
          padding-top: 10px; width: 450px;">

                GESTION DES GUICHETS DE L'INCI DANS LES TG </h1>
            <h1 class="box-title">Enregistrement des recettes</h1>
            
            <input type="Date" class="box-input" name="Date" placeholder="Date" required />
            <input type="Text" class="box-input" name="Libelle_article" placeholder="Libelle article" required autocomplete="off" />
           <input type="number" class="box-input" name="Quantité" placeholder="Quantité" required autocomplete="off" />
            <input type="number" class="box-input" name="Montant" placeholder="Montant" required autocomplete="off" />
            <input type="text" class="box-input" name="Observation" placeholder="Observation" required />
            <input type="submit" name="submit" value="Valider" class="box-button" />

           
        </form>
</body>

</html>