<?php
session_start();
include "fonctions.php";
$loginemail = $_POST['emailogin'];
$loginmdp = $_POST['mdplogin'];

$nb_ligne = mailExiste($loginemail, $loginmdp);

if ($nb_ligne != 0) {
    echo "misy";

    $idCo = get_idCo($email, $mdp);

    foreach ($idCo as $id) {
        echo $id['id_membre'];
    }
    $_SESSION['idCo'] = $id['id_membre'];

    header('location:../pages/modele2.php');
} elseif ($nb_ligne == 0) {
    echo "tsy misy";
    header('location:../pages/modele1.php?login');
}
