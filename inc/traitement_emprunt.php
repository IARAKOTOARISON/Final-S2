<?php 
session_start();
include "fonctions.php";

$_SESSION['idCo'];

if(isset($_POST['duree'])){


    $id = $_POST['id_obj'] ;
    $duree = $_POST['duree'] ;
    echo $_SESSION['idCo']; 
    echo $_POST['duree'] ;
    echo $_SESSION['idCo']; 

    $sql = "INSERT INTO fi_dispo_dans (id_objet, duree, date_disponibilite) VALUES ('$id', '$duree', DATE_ADD(NOW(), INTERVAL $duree DAY))";

    header('location:../pages/liste.php') ;

}
else {
    header('location:../pages/liste.php') ;
}
?>