<?php
session_start();
require('fonctions.php');

$uploadDir = __DIR__ . '/uploads/';
$maxSize = 25 * 1024 * 1024; // 2 Mo
$allowedMimeTypes = ['image/png','image/jpeg','image/jpg'];

// // Vérifie si un fichier est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo " === 'POST'reçu.";
    //var_dump($_FILES); // Affiche le contenu de $_FILES

    if (isset($_FILES['media'])) {

        $file = $_FILES['media'];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            die('Erreur lors de l’upload : ' . $file['error']);
        }
        // Vérifie la taille
        if ($file['size'] > $maxSize) {
            die('Le fichier est trop volumineux.');
        }
        // Vérifie le type MIME avec `finfo`
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mime, $allowedMimeTypes)) {
            die('Type de fichier non autorisé : ' . $mime);
        }
        // renommer le fichier
        $originalName = pathinfo($file['name'], PATHINFO_FILENAME);
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newName = $originalName . '_' . uniqid() . '.' . $extension;


        // echo $originalName;
        // echo $extension;
        echo $newName;


        $id = $_SESSION['idCo'];
        $name_image = $newName;
        $name = $_POST['nom_obj'];
        $idCat = $_POST['cat_obj'] ;


        echo $id, $name, $idCat;

        // Déplace le fichier
        if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {

            if (strpos($mime, 'image/') === 0) {


                insert_obj($name,$idCat,$id);

                $idfarany = get_id_obj_farany();
                foreach($idfarany as $i){

                    echo $i['id_objet'] ;

                    insert_im($i['id_objet'],$name_image);

                }

                echo "Fichier image détecté : " . $newName;
            } 

            header('location:../pages/modele2.php') ;

            echo "Fichier uploadé avec succès : " . $newName;
        } else {
            echo "Échec du déplacement du fichier.";
        }
    } else {
        echo "Aucun fichier reçu.";
    }
} else {
    echo "tsisy post tonga.";
}


// $_SESSION['photo_name'] = $newName ;
?>