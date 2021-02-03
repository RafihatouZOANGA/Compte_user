<?php

require_once "connexionUser.php"; 
$pseudo= $_POST["pseudo"];
$email= $_POST["email"];
$password= $_POST["password"];


if(isset($_POST['email']) && isset($_POST['password']))
{
    $check = $dbb->prepare('SELECT pseudo, email, password FROM user WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 1)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            //Hachage du mot de passe

            $password = hash('sha256' , 'password');

        }else {header('Location:inscription_apprenants/formulaire.php?login_err=email');}
    }else {header('Location:inscription_apprenants/formulaire.php?login_err=already');}
}else{ header('Location:inscription_apprenants/formulaire.php');}

?>

