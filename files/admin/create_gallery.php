<?php
// Create database connection
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
<br>
<br>
<img id="construction" src="files/img/construction.png">

    <!--<center>
        <form method="POST" action="index.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image">
            </div>
            <div>
      <textarea
          id="text"
          cols="40"
          rows="4"
          name="image_text"
          placeholder="Say something about this image..."></textarea>
            </div>
            <div>
                <button class="btn btn-dark content-center" href="?p=create_gallery" type="submit" name="upload">Envoyer</button>
            </div>
        </form>
    </center>
</div>
-->
<div class="outer-div">
    <div class="inner-div">
        <a class="btn btn-dark content-center" href="?p=admin_crud">ESPACE ADMIN</a>
    </div>
    <div>

<!--  MY HEADER -->
<?php
include "files/content/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
