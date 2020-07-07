<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon Portfolio | Galerie</title>
    <meta charset="utf-8">
    < <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- MY CSS -->>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Artifika&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!--  MY HEADER -->
<?php
include "files/content/header.php";
?>
<!-- CONTENU PRINCIPAL PAGE GALERIE -->
<div class="gallery-section">
    <div class="inner-width">
        <h1>Ma galerie</h1>
        <div class="border"></div>
        <div class="gallery">

            <a href="files/img/1.png" class="image">
                <img src="files/img/1.png" alt="">
            </a>

            <a href="files/img/2.png" class="image">
                <img src="files/img/2.png" alt="">
            </a>

            <a href="files/img/3.png" class="image">
                <img src="files/img/3.png" alt="">
            </a>

            <a href="files/img/4.png" class="image">
                <img src="files/img/4.png" alt="">
            </a>

            <a href="files/img/5.png" class="image">
                <img src="files/img/5.png" alt="">
            </a>

            <a href="files/img/6.png" class="image">
                <img src="files/img/6.png" alt="">
            </a>

            <a href="files/img/7.png" class="image">
                <img src="img/7.png" alt="">
            </a>

            <a href="files/img/8.png" class="image">
                <img src="files/img/8.png" alt="">
            </a>

        </div>
    </div>
</div></div>
<!--MY FOOTER -->
<?php include "files/content/footer.php"; ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script> /*JAVASCRIPT POUR LA PAGE GALERIE*/

    $(".gallery").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery:{
            enabled: true
        }
    }); </script>
</body>
</html>
