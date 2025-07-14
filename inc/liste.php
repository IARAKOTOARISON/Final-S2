
<body class="text-light">
    <h1>objets disponibles</h1>
    <?php $liste= get_list_obj_dispo();
    
    foreach($liste as $l){ ?>
        <p><?= $l['nom_objet'] ?></p>
    <?php }?>
    <h1>objets demprunte</h1>
    <?php $liste2= get_list_obj_emprunte();
    foreach($liste2 as $l2){  ?>
        <p><?= $l2['nom_objet'] ?>  ,   retour : <?= $l2['date_retour'] ?> </p>
    <?php 
    }?>
</body>