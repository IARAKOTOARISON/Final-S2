<?php
include_once 'connexion.php';
?>



<h2 class="blue">Nouvel Objet</h2>

<form action="../inc/treatment_upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" id="title" name="nom_obj" placeholder="Nom de l'objet" required>

    </div>
    <div class="form-group">
        <p>Categorie de l'objet
        
        <select name="cat_obj" id="">
                        <option value="1" name="cat_obj"> Esthetique</option>
                    
                        <option value="2" name="cat_obj"> Bricolage</option>

                        <option value="3" name="cat_obj"> Mecanique</option>
                    
                        <option value="4" name="cat_obj"> Cuisine</option>
            </select>
            </p>
    </div>
    <div class="form-group">
        <p><label for="media">Fichier (images )</label></p>

        <input type="file" id="media" name="media" accept="image/*" required>

    </div>
    <p class="mt-3 "><input type="submit" class="bg-blue rounded border-0 p-2" value="Ajouter"></p>
</form>

<div class="back-link blue">
    <a href="../pages/modele2.php">⬅ Retour </a>
</div>