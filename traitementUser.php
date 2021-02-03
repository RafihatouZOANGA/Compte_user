<?php 


require_once "connexionUser.php"; 
$pseudo= $_POST["pseudo"];
$email= $_POST["email"];
$password= $_POST["password"];

//Hachage du mot de passe

$password = hash('sha256' , 'password');

$preparation = $db -> prepare('INSERT INTO user(pseudo,email,password)VALUES (?,?,?)');

$preparation -> execute(array($pseudo,$email,$password));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création de compte User</title>
    <link rel="stylesheet" href="style/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/styleUser.css">
</head>
<body>

    <!-- début entete-->
    <header> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <h4 class="MyApp" >MyApp</h4>
                <div class="div_lien_liste a_liste">Projet Apprenants Simplon</div>
                <img  class="img-fluid" height="40px" width="200px" src="style/images/logo br.png" alt=""> 
            </div>
          </nav>
    <!-- fin entete-->
    </header> 
        <!-- début entete-->
    <div class="container">
    <div class="row form_compte">
            <div class="col-4"></div>
            <div class="col-4-fluid cadre">
                <div class="felicitation">
                    <h3 class="inscription" ><strong>Félicitation!</strong></h3>
                    <img  class="img-fluid" height="40px" width="60px" src="style/images/index.jpg" alt=""> 
                </div>
                <p>Vous venez de créer un compte</p> <br>
                <p class="avant_sign" ><strong><a href="identification.php">Veuillez vous connecter svp.</a></strong></p>
                <div class="sign">
                    <button class="sign_in"> <a href="index.php">Retour</a> </button>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
        <!-- fin entete-->

</body>

<footer>
    <div class="container-fluid bg-dark">
        <div class="row">
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