<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Objets Disponibles</title>
</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-5">
                <h1 class="text-center">Objets Disponibles</h1>
                <div class="col-6 col-md-4 ">
                    
                </div>
                <div class="list-group mb-4 ">
                    <?php $liste = get_list_obj_dispo();
                        foreach ($liste as $l) {?>
                    <a href="modele2.php?idobj=<?=  $l['id_objet'] ?>" class="list-group-item list-group-item-action"><?=$l['nom_objet']?></a>
                    <!-- <div class="col-6 col-md-4"><img src="" alt="image de l obj" srcset=""></div> -->
                    <?php }?>
                </div>
            </div>
            <div class="col-7">
                <h1 class="text-center">Objets Empruntés</h1>
                <div class="list-group">
                    <?php $liste2 = get_list_obj_emprunte();
                        foreach ($liste2 as $l2) {?>

                    <div class="row">
                        <div class="col-6 col-md-4 ">
                            <a href="#" class="list-group-item list-group-item-action">
                                <?=$l2['nom_objet']?>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">Retour : <?=$l2['date_retour']?></div>
                        <div class="col-6 col-md-4"><img src="" alt="image de l obj" srcset=""></div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>