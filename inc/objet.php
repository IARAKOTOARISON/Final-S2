<?php
$obj= get_list_obj_id( $id);
$nom_cat = get_nom_categorie($id);
$hist = historique($id);

?>

<body>
    <div class="row m-4">
        <div class="col-4">
            <?php 
        foreach ($obj as $o) { ?>
            <h1 class="text-primary"><?= $o['nom_objet'] ?></h1>

            <?php  }    ?>
            <?php 
        foreach ($nom_cat as $n) { ?>
            <p> <span class="fw-bold">Categorie: </span> <?= $n['nom_categorie'] ?></p>

            <?php  }  ?>
        </div>
        <div class="col-8">
            <img src="" alt="la photo" srcset="">
        </div>
    </div>
    <?php 
        foreach ($hist as $h) { ?>
    <p><span class="fw-bold">Emprunte par : <?= $h['id_membre'] ?></span></p>
    <p><span class="fw-bold">Date emprunt : <?= $h['date_emprunt'] ?></span></p>
    <p><span class="fw-bold">Date retour : <?= $h['date_retour'] ?></span></p>

    <?php  }    ?>


</body>