<?php
$obj= get_list_obj_id( $id);
$nom_cat = get_nom_categorie($id);
?>



<body>
    <h1><?= $id ?></h1>
    <?php 
        foreach ($obj as $o) { ?>
    <p><?= $o['nom_objet'] ?></p>

    <?php  }    ?>
    <?php 
        foreach ($nom_cat as $n) { ?>
    <p><?= $n['nom_categorie'] ?></p>

    <?php  }    ?>
</body>