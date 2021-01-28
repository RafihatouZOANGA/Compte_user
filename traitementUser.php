<?php 


require_once "connexion.php"; 
$nom = $_POST["nom"];
$prenom = $_POST ["prenom"];
$naissance = $_POST ["naissance"];
$mail = $_POST ["mail"];
$branche = $_POST ["branche"];

$preparation = $db -> prepare('INSERT INTO apprenants(nom,prenom,naissance,mail,branche)VALUES (?,?,?,?,?)');

$preparation -> execute(array($nom,$prenom,$naissance,$mail,$branche));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">


</head>
<body>

    <!-- début entete-->
    <header> 
            <nav>
                <div class="container-fluid">
                        <div class=" r1 row bg-white">
                                <div class="col-4">
                                <h6 class="As" style="font-size:20px"> apprenants</h6>
                                    <h6 class="As" style="font-size:20px">simplon</h6>
                                </div>
                                <div class="col-4">
                                <img  class="img-fluid" height="70px" width="350px" src="style/images/logo br.png" alt=""> 
                                </div>
                                <div class="col-4 text-right">
                                <a href="#" class="ls">Liste des apprenants</a>
                              </div>
                        </div>  
                    </div>
                </div>
            </nav>
    </header>   <!-- fin entete-->

    <div class="corps">
        <h3 class="message_enreg" ><strong>Enregistrement effectué avec succès</strong></h3>
    </div>

</body>

<footer>
    <div class="container-fluid bg-dark">
        <div class="row pt-100">
            <div class="col-4"></div>
            <div class="col-4">
               <img src="style/images/co.png" width="55" height="55" alt=""/>
               <span style="color: white">SIMPLON 2021</span>
            </div>
            <div class="col-4"></div> 
        </div>
    </div>
</footer>
</html>