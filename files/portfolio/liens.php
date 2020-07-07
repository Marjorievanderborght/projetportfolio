<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Accueil de l'administration du Portfolio">
    <meta name="author" content="Pierre">
    <title>Admin - Contacts</title>
    <!-- Place your stylesheet here-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jumbotron.css">
    <link href="#" rel="stylesheet" type="text/css">
</head>
<body>
<!--  MY HEADER -->
<?php
include "files/content/header.php";
?>
<?php
// Include config file
require_once "files/admin/config.php";
$sql = "SELECT * FROM liens";
$query= mysqli_query($db,$sql)
?>

<main class="container">
    <h1 class="text-center mt-4">Liste des liens</h1>
    <br>
    <p class="lead">Bienvenue dans cette section vous retrouverez la liste des liens des sites liés au développement web et qui me semblent intéressants.</p>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">URL du site</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td class='tableaucontact'><?php echo $row['nom'];?></td>
                <td class='tableaucontact'><?php echo $row['liens'];?></td>
                <td class='tableaucontact'><?php echo $row['description'];?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</main>
</main>

<!--MY FOOTER -->
<?php include "files/content/footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>