<?php
    include('../inc/fonctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<?php 
    include('../inc/navbar.php');
    ?>

<body class="bg-dark">
    <div class="d-flex justify-content-center align-items-center mt-4 text-center">
        <div class="card p-4 " style="width: 30rem;">
            <?php 
            if(isset($_GET['login'])){
                include('../inc/login.php');
            }
            else{
                include('../inc/inscription.php');
            }
            ?>
        </div>
    </div>
</body>

<?php 
    include('../inc/footer.php');
    ?>

</html>