<?php

require_once "files/admin/config.php";

if (isset($_POST['nom']) && isset($_POST['liens']) && isset($_POST['description']) ) {

    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, "UTF-8");
    $liens = htmlspecialchars($_POST['liens'], ENT_QUOTES, "UTF-8");
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, "UTF-8");

    if (!empty($nom) && !empty($liens) && !empty($description) ) {
        $sql = "INSERT INTO liens (nom,liens,description) VALUES ('$nom','$liens','$description')";
        $query =mysqli_query($db,$sql);
        $_SESSION['message'] = "les données ont bien été transmises";
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/jumbotron.css">
    <link href="#" rel="stylesheet" type="text/css">

    <title>Admin - Liste des liens</title>
</head>
<body>
<!--  MY HEADER -->
<?php
include "files/content/header.php";
?>
<main class="container">
    <h1 class="text-center mt-4">Admin - Ajouter un lien</h1>
    <p class="lead text-center">Ce formulaire permet d'ajouter un nouveau lien dans la liste</p>
    <form method="post" action="?p=create" id="formulaire">
        <div class="form-group row">
            <label class="col-md-3" for="nomSite">Nom du site (*)</label>
            <input type="text" name="nom" class="form-control col-md-9" id="nomSite" placeholder="Entrez le nom du site" required>
            <div class="invalid-feedback text-left offset-md-3">Vous devez entrez le nom du site</div>
        </div>
        <div class="form-group row">
            <label class="col-md-3" for="urlSite">URL du site (*)</label>
            <input type="url" name="liens" class="form-control col-md-9" id="urlSite" placeholder="Entrez l'adresse du site (URL)" required>
            <div class="invalid-feedback text-left offset-md-3">Le format de l'URL n'est pas correct</div>
        </div>
        <div class="form-group row">
            <label class="col-md-3" for="description">Description</label>
            <textarea class="form-control col-md-9" name="description" id="description" placeholder="Entrez une description"></textarea>
        </div>
        <div class="form-group row">
            <p class="form-text text-center col-md-12">(*) Champs obligatoires</p>
        </div>
        <button type="submit" class="btn btn-primary btn-block offset-md-4 col-md-4">Envoyer les données</button>
    </form>
</main>

<?php
// Include config file
$sql = "SELECT * FROM liens";
$query= mysqli_query($db,$sql)
?>

<main class="container">
    <h1 class="text-center mt-4">Admin - Liste des contacts</h1>
    <p class="lead">Bienvenue dans cette section qui permet de gérer la liste des contacts. Les données ont été encodées par les visiteurs du site via le formulaire de contact.</p>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">URL du site</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
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
                <td><a href="?p=update&id=<?php echo $row['id'];?>"><img src="files/img/refresh.png" alt="Update"></a></td>
                <td><a href="?p=delete&id=<?php echo $row['id'];?>"><img src="files/img/trash.png" alt="Delete"></a></td>

                <td></td>
            </tr>
        <?php }
        ?>

        </tbody>
    </table>
    <div class="outer-div">
        <div class="inner-div">
            <a class="btn btn-dark content-center" href="?p=admin_crud">ESPACE ADMIN</a>
        </div>
        <div>

</main>
<!--MY FOOTER -->
<?php include "files/content/footer.php"; ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!-- Validation du formulaire -->
<script type="text/javascript">
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var form = document.getElementById('formulaire');
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        }, false);
    })();
</script>
</body>
</html>








