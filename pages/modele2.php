<?php
    include('../inc/fonctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>LOGIN</title>
</head>
    <?php 
    include('../inc/navbar.php');
    ?>

    <body class="">
    <?php
            if (isset($_GET['idobj'])) {
                $id = $_GET['idobj'];
                include('../inc/objet.php') ;
            }else{
                include('../inc/liste.php') ;
            }
        
        ?>
        <?php ?>
    </body>

    <?php 
    include('../inc/footer.php');
    ?>

</html>