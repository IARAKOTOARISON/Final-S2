<?php
$obj= get_list_obj_id( $id);
$nom_cat = get_nom_categorie($id);
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

            <?php  }    ?>
        </div>
        <div class="col-8">
            <img src="" alt="la photo" srcset="">
        </div>
    </div>

</body>