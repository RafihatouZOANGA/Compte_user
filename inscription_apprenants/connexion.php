<?php
try{
    $db= new PDO ('mysql:host=localhost; dbname=liste_apprenants','root','');
}
catch(Exception $e) {
    die('Erreur:'.$e -> getMessage ());

}

if(extension_loaded('PDO')){
echo '';
}

?>  