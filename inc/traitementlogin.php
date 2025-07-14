<?php
session_start();
include("include/connexion.php");
$loginemail=$_POST['emailogin'];
$loginmdp=$_POST['mdplogin'];
$sqlogin="SELECT * FROM Membres WHERE Email='%s' AND MotDePasse='%s'";
$sqlogin=sprintf($sqlogin, $loginemail, $loginmdp);
$resultat=mysqli_query($bdd, $sqlogin);
$nb_ligne=mysqli_num_rows($resultat);


if ($nb_ligne!=0) {
    $donneelogin=mysqli_fetch_assoc($resultat);
    $_SESSION['idMembre']=$donneelogin['idMembre'];
    header('location:accueil.php');
}elseif ($nb_ligne==0) {
    header('location:login.php?error=1');
}

?>