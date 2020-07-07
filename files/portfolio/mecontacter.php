<?php
// Include config file
require_once "files/admin/config.php";

if (isset ($_POST) && isset ($_POST ['username']) && isset ($_POST ['email']) && isset ($_POST ['sujet']) && isset ($_POST ['message'])) {

    $destinataire = "marjorie1@hotmail.be";
    $sujet = "formulaire de contact";
    $msg = "une nouvelle question est arrivée <br>
    Nom : {$_POST ['username']} <br>
    Email : {$_POST ['email']}  <br>
    Sujet : {$_POST ['sujet']}  <br>
    Message : {$_POST ['message']} ";
    $Entetes = "MIME-Version: 1.0\r\n";
    $Entetes .= "Content-type: text/html; charset=UTF-8\n";


    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, "UTF-8");
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, "UTF-8");
    $sujet = htmlspecialchars($_POST['sujet'], ENT_QUOTES, "UTF-8");
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES, "UTF-8");
    if (!empty($username) && !empty($email) && !empty($sujet) && !empty($message)) {
        mail($destinataire, $sujet, $msg, $Entetes);
        $reponse = "Le mail a bien été envoyé.";
    }

    if (!empty($username) && !empty($email) && !empty($sujet) && !empty($message)) {
        $sql = "INSERT INTO users (username,email,sujet,message) VALUES ('$username','$email','$sujet','$message')";
        mysqli_query($db, $sql);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio | Contact</title>
    <meta charset="utf-8">
    < <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- MY CSS -->>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- HEADER -->

    <?php
    include "files/content/header.php";
    ?>

<!-- CONTENU PRINCIPAL PAGE CONTACT -->
<?php if (!empty($reponse)) {
    echo '<div class="alert alert-success" role="alert">' . $reponse . '</div>';
} ?>
<header class="container">
    <br>
    <br>
    <h1>Formulaire de contact</h1>
    <br>
</header>
<section class="container">
    <form method="post" action="">
        <div class="form-group form-row">
            <label for="votreEmail" class="col-3">Votre email</label>
            <input type="email" name="email" class="form-control col-9" id="votreEmail" aria-describedby="emailHelp"
                   placeholder="Entrez votre e-mail" required>
        </div>
        <div class="form-group form-row">
            <label for="votreNom" class="col-3">Votre nom</label>
            <input type="text" name="username" class="form-control col-9" id="votreNom" placeholder="Entrez votre nom"
                   required>
            <maxlength
            ="45" size="45" oninput="testChamp(45);">
            <small class="form-text offset-3 d-none" id="msgErreur">Les données introduites dépassent la limite (max
                45)</small>
        </div>
        <div class="form-group form-row">
            <label for="votreSujet" class="col-3">Sujet</label>
            <input type="text" name="sujet" class="form-control col-9" id="votreSujet" placeholder="Sujet" required>
            <maxlength
            ="45" size="45" oninput="testChamp(45);">
            <small class="form-text offset-3 d-none" id="msgErreur">Les données introduites dépassent la limite (max
                45)</small>
        </div>
        <div class="form-group form-row">
            <label for="votreMessage" class="col-3">Votre message</label>
            <textarea class="form-control col-9" name="message" placeholder="Entrez votre message" required></textarea>
        </div>
        <button type="submit" value="Envoyer" class="btn btn-primary">Envoyer</button>
    </form>
</section>

<!-- FOOTER -->
<footer>
    <?php
    include "files/content/footer.php";
    ?>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>





