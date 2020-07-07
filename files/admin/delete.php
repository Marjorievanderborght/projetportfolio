<?php

// Include config file
require_once "files/admin/config.php";// si il existe une variable get qui se nomme "confirm"
if(isset($_GET['confirm'])&&ctype_digit($_GET['confirm'])){
    $id = (int) $_GET['confirm'];
    // requête
    $sql = "DELETE FROM liens WHERE id=$id";
    $query= mysqli_query($db,$sql);
    header("Location: ./?p=create");
}
if(isset($_GET['id'])&&ctype_digit($_GET['id'])) {
    $id = (int)$_GET['id'];

// requête qui récupère la page grâce à son id
    $sql = "SELECT * FROM liens WHERE id=$id;";
// on effectue la requête sql avec gestion d'erreur procédurale or die()
    $query = mysqli_query($db, $sql) or die("Erreur: " . mysqli_errno($db));
// on a un article
    $nb = mysqli_num_rows($query);

    if ($nb === 1) {
        // si oui on stocke la ligne dans $item
        $item = mysqli_fetch_assoc($query);
        // on récupère le titre
        $titre = "Suppression de " . $item['id'];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$titre?></title>
</head>
<body>
<h1><?=$titre?></h1>
<div id="menu">

</div>
<div id="content">
    <div id="pages">
        <?php
        // si on a pas de résultat
        if(empty($nb)){
            echo "<h4>Cette page n'existe plus</h4>";
            // on a au moins une page
        }else {
            ?>
            <h5>Voulez-vous vraiment supprimer lien  "<?=$item['liens']?>" ?</h5>
            <a href="?p=delete&id=<?=$item['id']?>&confirm=<?=$item['id']?>"><button type="button" >Oui</button></a> <button onclick="history.go(-1);">Non</button>

            <?php
        }
        ?>
    </div>
</div>
</body>
</html>


