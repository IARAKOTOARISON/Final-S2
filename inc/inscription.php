
<body>
    <h1>Inscription</h1>
    <div class="inscrip">
        <form action="traitement.php" method="post">
        <p>Nom: <input class=inpute type="text" name="nom"></p>
        <p>Date de Naissance: <input class=inpute type="date" name="dtn"></p>
        <p>Genre: 
            <select name="" id="">
                        <option value="Femme" name="genre"> Femme</option>
                    
                        <option value="Homme" name="genre"> Homme</option>
            </select>
        <p>Email: <input class=inpute type="email" name="email"></p>
        <p>Ville: <input class=inpute type="text" name="ville"></p>
        <p>Mot de Passe: <input class=inpute type="password" name="mdp"></p>
        <p><a href="#">Image pour votre profil</a></p>
    
        <input class=boutonValider type="submit" value="Valider">
        </form>
        <a href="../pages/modele1.php?login">Se connecter</a>
        <?php 
            if (isset($_GET['error'])) { ?>
                <p class=erreur>Veuillez bien remplir le formulaire.</p>
            <?php } ?>
    </div>
</body>