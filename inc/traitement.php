<?php
include("fonctions.php");

$nom=$_POST['nom'];
$dtn=$_POST['dtn'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$image = 'null';

if ($nom=="" || $email=="" || $mdp=="" || $ville=="" || $dtn=="" || $genre =="") {
    //header("Location: ../pages/modele1.php");
    echo "misy tsy ampy";
    exit();
}

insertmembre($nom, $dtn, $genre, $email, $ville, $mdp, $image);



?>
