<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/style local.css" />
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
</head>

<body>
    <?php
  require('../connexion_reginci.php');

          
        
       ?>
       <form class="box" action="../insert_client_new.php" method="post" autocomplete="off" style="
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