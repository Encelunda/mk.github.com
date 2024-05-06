<?php
    $connection=mysql_connect("localhost", "root", "", "form");
    (!$connexion){
        die("Erreur de connexion:" . mysql_connect_error());
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    if (mysql_query($connexion,$sql)){
        echo "donnees enregistrer avec succes";
    } else{
        echo "Erreur d'enregistrement des donnees :" . mysql_error($connexion);
    }
    mysql_close($connexion);
?>