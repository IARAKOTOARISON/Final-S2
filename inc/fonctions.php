<?php 
require('connexion.php');

function insertmembre($name, $dtn, $genre, $email, $mdp,$ville, $image)
{
    $sql = "insert into fi_membre(nom, naissance, genre, email,mdp,ville,imgprofil) 
            values ('$name','$dtn', '$genre', '$email', '$ville','$mdp',  '$image') ;";
    mysqli_query(dbconnect(), $sql);
    echo $sql;
}


function mailExiste($mail,$mdp)
{
    $sql = " select * from fi_membre where email = '$mail' and mdp = '$mdp';";
    $result = mysqli_query(dbconnect(), $sql);
    $nbLigne = mysqli_num_rows($result);
    // echo $nbLigne;
    return $nbLigne;
}

function get_idCo($mail,$mdp)
{
    $sql = "select * from fi_membre where email = '$mail'and mdp = '$mdp' ;";
    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);

    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    return $tab;
}


function get_list_obj(){
    $sql = "select * from v_obj ;";
    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);

    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    return $tab;
}

function get_list_obj_emprunte(){
    $sql = "select * from v_emp_obj ;";
    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);

    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    return $tab;
}



function get_list_obj_dispo(){
    $sql = "select * from v_obj_disponibles ;";
    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);

    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    return $tab;
}

function get_list_obj_id($id){
    $sql = "select * from v_obj where id_objet = $id ;";
    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);

    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    return $tab;
}


function get_nom_categorie($idobj){
    $sql = "select * from v_obj_par_categorie where id_objet = $idobj ;";
    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);

    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    return $tab;
}

function historique($id) {
    $sql = "SELECT id_emprunt, id_membre, date_emprunt, date_retour 
            FROM fi_emprunt 
            WHERE id_objet = $id";

    //echo $sql;

    $result = mysqli_query(dbconnect(), $sql);
    $tab = [];

    if ($result) {
        while ($valiny = mysqli_fetch_assoc($result)) {
            $tab[] = $valiny;
        }
        mysqli_free_result($result);
    }

    $count = count($tab);

    if ($count === 0) {
        //echo "pas d 'historique";
    }

    return $tab;
}


?>