<?php
require('connexion.php');

//récuperer les information du formulaire


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        formulaire article
            
    </title>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<h5 style=" background:blue; color:red; text-align:center"> ENREGISTREMENT DES ARTICLES

</h5>

    <div class="row mt-4">
</div>
        <form action="insert_article.php" method="post">
            <div class="row container justify-content-center">
                <div class="col-6">
                   
                   
                        <div class="form-group">
                            Votre Reference :<br />
                            <input class="form-control" type="text" name="Reference_Article" value="" />
                        </div>
                   
                  
                        <div class="form-group">
                            Votre Désignation:<br />
                            <input class="form-control" type="text" name="Designation_Article" value="" />
                        </div>
                   
                        <div class="form-group">
                            Votre Prix:<br />
                            <input class="form-control" type="text" name="Prix_Article" value="" />
                        </div>
                   
                   
                        <div class="form-group">
                            Votre Stock:<br />
                            <input class="form-control" type="number" name="Id_Stock" value="" />
                        </div>
                   
                        <div class="form-group">
                            Votre Client:<br />
                            <input class="form-control" type="text" name="Id_Client" value="" />
                        </div>
                        <br />
                       <button type="submit" name="enregistrer" value="enregistrer"> VALIDER </button>
                                            
                </div>
            </div>
        </form>
    </div>
</body>

</html>