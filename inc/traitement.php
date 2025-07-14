<?php
include("fonctions.php");
session_start();


$nom=$_POST['nom'];
$dtn=$_POST['dtn'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$image = 'null';

echo $ville;
echo $mdp ;

if ($nom=="" || $email=="" || $mdp=="" || $ville=="" || $dtn=="" || $genre =="") {
    //header("Location: ../pages/modele1.php");
    echo "misy tsy ampy";
    exit();
}



insertmembre($nom, $dtn, $genre, $email, $ville, $mdp, $image);
$idCo = get_idCo($email,$mdp) ;

foreach ( $idCo as $id){
    echo $id['id_membre'] ;
}
$_SESSION['idCo']= $id['id_membre'];

header('location:../pages/modele2.php');

?>
