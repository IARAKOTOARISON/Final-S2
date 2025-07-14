<?php 
require('connexion.php');

function insertmembre($name, $dtn, $genre, $email, $mdp,$ville, $image)
{
    $sql = "insert into fi_membre(nom, naissance, genre, email,ville,mdp,imgprofil) 
            values ('$name','$dtn', '$genre', '$email', '$ville','$mdp',  '$image') ;";
    mysqli_query(dbconnect(), $sql);
    echo $sql;
}


function mailExiste($mail)
{
    $sql = " select * from tum_users where mail = '$mail';";
    $result = mysqli_query(dbconnect(), $sql);
    $nbLigne = mysqli_num_rows($result);
    // echo $nbLigne;
    return $nbLigne;
}





?>