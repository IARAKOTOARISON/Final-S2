<?php
$obj = get_list_obj_id($id);
$nom_cat = get_nom_categorie($id);
$hist = historique($id);
?>

<body class="bg-light">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <?php foreach ($obj as $o) { ?>
                    <h1 class="display-4 text-primary"><?= $o['nom_objet'] ?></h1>
                <?php } ?>
                <?php foreach ($nom_cat as $n) { ?>
                    <p class="lead"><span class="font-weight-bold">Catégorie: </span><?= $n['nom_categorie'] ?></p>
                <?php } ?>
            </div>
            <div class="col-md-8">
                <?php $im = get_image($id);
                if ($im != 0) { ?>
                    <img src="../inc/uploads/<?= $im['nom_image'] ?>" style="width:100px" alt="image de l obj" srcset="">
                <?php } else { ?>
                    <img src="../inc/uploads/logo.png" style="width:100px" alt="image de l obj" srcset="">
                <?php } ?>
            </div>
        </div>

        <div class="mt-4">
            <h2 class="h5">Historique des emprunts</h2>
            <div class="list-group">
                <?php if (!empty($hist)) {
                    foreach ($hist as $h) { ?>
                        <div class="list-group-item">
                            <p class="mb-1"><span class="font-weight-bold">Emprunté par : </span><?= $h['id_membre'] ?></p>
                            <p class="mb-1"><span class="font-weight-bold">Date d'emprunt : </span><?= $h['date_emprunt'] ?></p>
                            <p class="mb-1"><span class="font-weight-bold">Date de retour : </span><?= $h['date_retour'] ?></p>
                        </div>
                    <?php }
                } else { ?>
                    <div class="alert alert-warning" role="alert">
                        Il n'y a pas d'historique.
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>