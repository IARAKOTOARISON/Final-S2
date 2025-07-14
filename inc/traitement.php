<?php
include("include/connexion.php");
$nom=$_POST['nom'];
$dtn=$_POST['dtn'];
$email=$_POST['email'];
$mdp=$_POST['mdp'];

if ($nom=="" || $email=="" || $mdp=="") {
    header("Location: index.php?error=1");
    exit();
}

$sql="INSERT INTO Membres (Nom,DateNaissance,Email,MotDePasse) VALUES ('%s' ,'%s' ,'%s' ,'%s')";
$sql= sprintf($sql, $nom, $dtn, $email, $mdp);
$resultat=mysqli_query($bdd,$sql);

if($resultat){
    header("Location: login.php");
}

?>
