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
                <h3 class="inscription" ><strong>Créer un compte</strong></h3>
                <form action="traitementUser.php" method="post">
                    <input class="input_compte" type="text" name="pseudo" placeholder="Pseudo"> <br>
                    <input class="input_compte" type="email" name="email" placeholder="E-mail" require="required" autocompplete="off"> <br>
                    <input class="input_compte" type="password" name="password" placeholder="Mot de passe" require="required" autocompplete="off"> <br>
                    <input class="submit" name="valider" type="submit" value="Valider">
                </form>
                <p class="avant_sign"><a href="identification.html">Avez-vous déjà un compte?</a></p>
                
            </div>
            <div class="col-4"></div>
        </div>
    </div>
        <!-- fin entete-->


    
<!--  la div recherche.    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>-->

</body>

<footer>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
               <img src="style/Image/co.png" width="55" height="55" alt=""/>
               <span style="color: white">SIMPLON 2021</span>
            </div>
            <div class="col-4"></div> 
        </div>
    </div>
</footer>
</html>