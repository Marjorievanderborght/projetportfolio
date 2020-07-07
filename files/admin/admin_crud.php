//Si la session n'existe pas, redirige moi vers login.php//
<?php
if (empty($_SESSION['username'])){
    header('location: ?p=login');
}
?>

<!DOCTYPE html>
<html>
<head>
    < < <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- MY CSS -->>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--  MY HEADER -->
<?php
include "files/content/header.php";
?>


<div class="outer-div">
    <div class="inner-div">
        <a href="?p=crud_contacts">
            <img class="imgcrud"  src="files/img/contacts.jpg">
        </a>
        <a href="?p=create">
            <img class="imgcrud" src="files/img/liens.jpg">
        </a>
        <a href="?p=create_gallery">
            <img class="imgcrud" src="files/img/galerie.jpg"></a>
    </div>
    </div>

<!--  MY HEADER -->
<?php
include "files/content/footer.php";
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

