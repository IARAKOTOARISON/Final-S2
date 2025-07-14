<?php
include_once 'connexion.php';
?>



<h2 class="blue">Nouvelle publication</h2>

<form action="../inc/treatment_upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <p><label for="title">Titre</label></p>

        <input type="text" id="title" name="title" placeholder="Titre de votre post" required>

    </div>
    <div class="form-group">
        <p><label for="description">Description</label></p>

        <textarea id="description" name="description" placeholder="Décrivez votre image ou vidéo..."></textarea>

    </div>

    <div class="form-group">
        <p><label for="media">Fichier (image ou vidéo)</label></p>

        <input type="file" id="media" name="media" accept="image/*,video/*" required>

    </div>
    <p class="mt-3 "><input type="submit" class="bg-blue rounded border-0 p-2" value="Publier"></p>
</form>
<div class="back-link blue">
    <a href="../pages/modele2.php">⬅ Retour </a>
</div>