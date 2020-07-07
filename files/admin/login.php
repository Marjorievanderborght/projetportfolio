<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/jumbotron.css">
</head>
<body>
<!--  MY HEADER -->
<?php
include "files/content/header.php";
require('files/admin/config.php');

if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($db, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($db, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
    $result = mysqli_query($db,$query) or die(mysqli_error());

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        // vérifier si l'utilisateur est un administrateur
        if ($user['type'] == 'admin') {
            $_SESSION['username'] = $username;
            header('location: ?p=admin_crud');

        }
    }else{
        $message = "le nom d'utilisateur ou le mot de passe est incorrect.";
    }

}
?>
<form class="box" action="" method="post" name="login">
    <h1 class="box-title">ESPACE ADMIN</h1>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion " name="submit" class="box-button">
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
</form>
<!--  MY FOOTER -->
<?php
include "files/content/footer.php";
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>