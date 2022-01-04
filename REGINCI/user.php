<?php
require('connexion.php');

//recuperer les information du formulaire



//On interroge 
$tgs = $dbco->prepare("
SELECT Id_tg,libelle_tg FROM tg");
$tgs->execute();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        formulaire utilisateurs
    </title>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<h5 style=" background:blue; color:red; text-align:center"> ENREGISTREMENT DES UTILISATEURS

</h5>

    <div class="row mt-4">
</div>
        <form action="insert_user.php" method="post">
            <div class="row container justify-content-center">
                <div class="col-6">
                   
                   
                        <div class="form-group">
                            Votre Civilité :<br />
                            <select class="form-select" name="civilite" value="" >
                            <option select> Monsieur</option>
                            <option select >Madame></option>
                            <option select >Mademoiselle</option>
                            </select>
                        </div>
                   
                  
                        <div class="form-group">
                            Votre Matricule:<br />
                            <input class="form-control" type="text" name="matricule_user" value="" />
                        </div>
                   
                        <div class="form-group">
                            Votre Nom:<br />
                            <input class="form-control" type="text" name="nom_user" value="" />
                        </div>
                   
                   
                        <div class="form-group">
                            Votre Prénoms:<br />
                            <input class="form-control" type="text" name="prenom_user" value="" />
                        </div>
                   

                   
                        <div class="form-group">
                            Votre Titre:<br />
                            <input class="form-control" type="text" name="titre_user" value="" />
                        </div>
                        <br />
                        <div class="form-group">
                            choissez une TG:<br />
                            <select class="form-control" name="tg" value="" >
                            <option selected> Selectionne une TG</option>
                            <?php
                            foreach ($tgs as $key => $tg) {
                               echo '<option value="'.$tg['Id_TG'].'">'.$tg['Libelle_TG'].'</option>';
                            }
                            ?>
                            </select>
                            </div>
                       <button type="submit" name="enregistrer" value="enregistrer"> VALIDER </button>
                         
                      
                   
                </div>
            </div>
        </form>
    </div>
</body>

</html>