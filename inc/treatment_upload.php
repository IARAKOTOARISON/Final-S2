<?php
session_start();
require('../inc/fonction.php');

$uploadDir = __DIR__ . '/uploads/';
$maxSize = 25 * 1024 * 1024; // 2 Mo
$allowedMimeTypes = ['image/png', 'video/mp4'];

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


        $id = $_SESSION['idco'];

        $title = $_POST['title'];
        $description = $_POST['description'];
        $name = $newName;
        $code_photo = 0;
        $code_video = 1;


        echo $id, $title, $description, $name;

        // Déplace le fichier
        if (move_uploaded_file($file['tmp_name'], $uploadDir . $newName)) {

            if (strpos($mime, 'image/') === 0) {


                insertPublications($id,$title,$description,$name,$code_photo);

                echo "Fichier image détecté : " . $newName;
            } elseif (strpos($mime, 'video/') === 0) {

                insertPublications($id,$title,$description,$name,$code_video);
                echo "Fichier vidéo détecté : " . $newName;
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