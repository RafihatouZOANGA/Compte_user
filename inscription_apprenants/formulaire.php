<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création de compte User</title>
    <link rel="stylesheet" href="style/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <!-- début entete-->
    <header> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <h4 class="MyApp" >MyApp</h4>
                <div class="div_lien_liste a_liste">Projet Apprenants Simplon</div>
                <img  class="img-fluid" height="40px" width="200px" src="style/Image/logo br.png" alt=""> 
            </div>
          </nav>
    <!-- fin entete-->
    </header> 
        <!-- début entete-->
    <div class="container">
        <div class="row-fluid">
            <h4 class="bien_connecter">Vous ètes maintenant connecté(e). Veuillez ajouter un apprenant.</h4>
        </div>
        <div class="row form_compte">
            <div class="col-4"></div>
            <div class="col-4-fluid cadre">
                <h3 class="inscription"><strong>Enregistrement</strong></h3>
                <form action="traitement.php" method="post">
                    <input class="input_compte" type="text" name="nom" placeholder="Nom" pattern="[A-Za-z]{1,}"> <br>
                    <input class="input_compte" type="text" name="prenom" placeholder="Prénom(s)"> <br>
                    <input class="input_compte" type="date" name="naissance" placeholder="Date de naissance"> <br>
                    <input class="input_compte" type="email" name="email" placeholder="E-mail"> <br>
                    <input class="input_compte" type="text" name="telephone" placeholder="Téléphone" pattern="[0-9]{1,}"> <br>
                    <input class="input_compte" type="text" name="branche" placeholder="Branche"> <br>
                    <input class="submit" type="submit" value="Enregistrer">
                </form>
                <p class="voir_liste" ><a href="liste.php"><strong>Voir la liste</strong></a></p>   
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