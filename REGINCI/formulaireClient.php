<?php
require('connexion.php');

//recuperer les information du formulaire


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        formulaire client
    </title>
    <meta charset="UTF-8">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<h5 style=" background:blue; color:red; text-align:center"> ENREGISTREMENT DES CLIENTS

</h5>

    <div class="row mt-4">
</div>
        <form action="insert_client.php" method="post">
            <div class="row container justify-content-center">
                <div class="col-6">
                   
                   
                        <div class="form-group">
                            Votre Matricule :<br />
                            <input class="form-control" type="text" name="mat_client" value="" />
                        </div>
                   
                  
                        <div class="form-group">
                            Votre nom:<br />
                            <input class="form-control" type="text" name="nom_client" value="" />
                        </div>
                   
                        <div class="form-group">
                            Votre prénoms:<br />
                            <input class="form-control" type="text" name="pren_client" value="" />
                        </div>
                   
                   
                        <div class="form-group">
                            Votre contact:<br />
                            <input class="form-control" type="number" name="contact_client" value="" />
                        </div>
                   

                   
                        <div class="form-group">
                            Votre email:<br />
                            <input class="form-control" type="text" name="email_client" value="" />
                        </div>
                        <br />
                       <button type="submit" name="enregistrer" value="enregistrer"> VALIDER </button>
                         
                      
                   
                </div>
            </div>
        </form>
    </div>
</body>

</html>