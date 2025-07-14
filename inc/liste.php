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
                <div class="list-group mb-4">
                    

                        <?php $liste = get_list_obj_dispo();
foreach ($liste as $l) {?>
                        <a href="modele2.php?idobj=<?=$l['id_objet']?>"
                            class="list-group-item list-group-item-action"><?=$l['nom_objet']?>

                            <?php $imm = get_image($l['id_objet']);   //ito argument
    if ($imm > 0) {?>
                            <img src="../inc/uploads/<?=$imm['nom_image']?>" style="width:100px" alt="image de l obj"
                                srcset="">
                            <?php } else {?>
                            <img src="../inc/uploads/logo.png" style="width:100px" alt="image de l obj" srcset="">
                            <?php }?>


                            <?php $d = get_date_dispo($l['id_objet'])?>  
                                 <p>dispo le <?php $d['date_disponibilite'] ?></p>

                        </a>

                        <form action="../inc/traitement_emprunt.php" method="post">
                            <input type="hidden" name="id_obj" value="$l['id_objet']" >

                        <p>Duree en jour : <input class=inpute type="text" name="duree"></p>
                        <input class=boutonValider type="submit" value="Emprunter">

                        </form>

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
                            <a href="modele2.php?idobj=<?=$l2['id_objet']?>"
                                class="list-group-item list-group-item-action">
                                <?=$l2['nom_objet']?>
                            </a>
                        </div>
                        <div class="col-6 col-md-4">Retour : <?=$l2['date_retour']?></div>
                        <div class="col-6 col-md-4">
                            <?php $im = get_image($l2['id_objet']);
    if ($im != 0) {?>
                            <img src="../inc/uploads/<?=$im['nom_image']?>" style="width:100px" alt="image de l obj"
                                srcset="">
                            <?php } else {?>
                            <img src="../inc/uploads/logo.png" style="width:100px" alt="image de l obj" srcset="">
                            <?php }?>
                        </div>
                    </div>


                    <?php }?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>