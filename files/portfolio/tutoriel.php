<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon Portfolio | Accueil</title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- MY CSS -->>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Artifika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<!--  MY HEADER -->
<?php
include "files/content/header.php";
?>
<!-- CONTENU PRINCIPAL PAGE TUTOS -->
<!--CONTENU TUTORIELS-->
<h2 class="tuto"> TUTORIEL FAVORI</h2>
<h3 class="presentationtuto"> Voici un tutoriel sélectionné sur la chaîne youtube de PrimFX et qui m'a aidée à appréhender la mise en page<br> d'un formulaire d'un espace admin, connexion et inscription en php.<br>Le tutoriel est clair, fluide et pas trop long car coupé en trois vidéos ce qui permet de pouvoir suivre sans perdre le fil.<br>Vous trouverez-ci dessous le lien vers la première partie du tutoriel qui m'a été nécessaire pour la création de mon formulaire php</h3>
<div class="tutofavori">
    <div>
        <p>
            <iframe width="680" height="350" src="https://www.youtube.com/embed/s7qtAnH5YkY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p>
    </div>
</div>
<h2 class="tuto"> TUTORIEL PERSONNEL</h2>
<h3 class="presentationtuto"> Vous trouverez ci-dessous mon tutoriel personnalisé : <br>comment choisir une police d'écriture en CSS3 pour votre site internet avec Google Fonts et Dafont.</h3>
<br>
<br>
<!-- Slideshow container -->
<div class="raslebol">
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 16</div>
            <img src="files/img/slide1.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 16</div>
            <img src="files/img/slide2.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 16</div>
            <img src="files/img/slide3.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 16</div>
            <img src="files/img/slide4.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 16</div>
            <img src="files/img/slide5.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / 16</div>
            <img src="files/img/slide6.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / 16</div>
            <img src="files/img/slide7.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / 16</div>
            <img src="files/img/slide8.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9/ 16</div>
            <img src="files/img/slide9.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">10 / 16</div>
            <img src="files/img/slide10.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">11 / 16</div>
            <img src="files/img/slide11.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">12 / 16</div>
            <img src="files/img/slide12.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">13 / 16</div>
            <img src="files/img/slide13.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">14 / 16</div>
            <img src="files/img/slide14.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">15 / 16</div>
            <img src="files/img/slide15.PNG" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">16 / 16</div>
            <img src="files/img/slide16.PNG" style="width:100%">
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
        <span class="dot" onclick="currentSlide(10)"></span>
        <span class="dot" onclick="currentSlide(11)"></span>
        <span class="dot" onclick="currentSlide(12)"></span>
        <span class="dot" onclick="currentSlide(13)"></span>
        <span class="dot" onclick="currentSlide(14)"></span>
        <span class="dot" onclick="currentSlide(15)"></span>
        <span class="dot" onclick="currentSlide(16)"></span>



    </div>
    <a href="files/img/policepersonnalisee.pdf" download>
        <img class="pdf" src="files/img/pdf.png">
    </a>
</div>
</div>
<!--FOOTER -->
<?php include "files/content/footer.php"; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>


