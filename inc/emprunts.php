<?php
    session_start();
    //include('fonctions.php');
    $idCo= $_SESSION['idCo'];
    echo $idCo ;
    echo $_SESSION['idCo']; ;
    $emp = mesemprunts( $idCo);

?>

<body>
    <h1>MES EMPRUNTS</h1>
    <?php foreach ($emp as $e) { ?>
    <form action="traitement_emprunts.php" method="post">

        <p>objet : <?= $e['id_objet']?></p>
        <p>etat:</p>
        <select name="etat" id="">
            <option value="Bon">Bon</option>
            <option value="Mauvais">Mauvais</option>
        </select>
        <input type="submit" value="Retourner">
    </form>
    <?php }?>



</body>