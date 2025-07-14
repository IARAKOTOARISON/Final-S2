
<body>
    <h1>Login</h1>
    <div class="log">
        <form action="../inc/traitementlogin.php" method="post">
            <p>Email: <input class=inputelogin type="email" name="emailogin"></p>
            <p>Mot de Passe: <input class=inputelogin type="password" name="mdplogin"></p>
            
            <input class=boutonValider type="submit" value="Valider">
        </form>
        <a href="../pages/modele1.php">S'inscrire</a>
        <?php 
            if (isset($_GET['error'])) { ?>
                <p class=erreur>Erreur, Email et Mot de passe invalide.</p>
            <?php } ?>
    </div>


</body>