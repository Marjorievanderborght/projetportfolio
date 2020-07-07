
<?php
// Include config file
require_once "files/admin/config.php";

if(!empty($_POST)){

    $id = (int) htmlspecialchars($_POST['id'], ENT_QUOTES, "UTF-8");
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, "UTF-8");
    $liens = htmlspecialchars($_POST['liens'], ENT_QUOTES, "UTF-8");
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, "UTF-8");

    if (!empty($nom) && !empty($liens) && !empty($description) ) {
        $sql="UPDATE liens SET nom ='$nom', liens ='$liens', description='$description' WHERE id = $id";
        $query =mysqli_query($db,$sql) or die(mysqli_error($db));
        $nb = mysqli_affected_rows($db);
        if($nb===1) {
            $nom = "Modification : Effectuée";
        }else{
            $erreur = "Erreur 404";
        }

        $reponse = "les données ont bien été modifiées";
    }
}

if(isset($_GET['id'])&&ctype_digit($_GET['id'])){
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM liens WHERE id=$id;";
    $query= mysqli_query($db,$sql);
    $nb = mysqli_num_rows($query);
    if($nb) {
        $detail_lien = mysqli_fetch_assoc($query);
    }else{
        $erreur = "Cet article n'existe pas";
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
<!-- HEADER -->
<header>
    <?php
    include "files/content/header.php";
    ?>
</header>



<main class="container">
    <br>
    <br>
    <h1 class="text-center mt-4">Admin - Mise à jour des liens</h1>
    <p class="lead text-center">Ce formulaire permet d'ajouter un nouveau lien dans la liste</p>
    <form method="post" action="" name="update" id="formulaire">
        <div class="form-group row">
            <label class="col-md-3" for="nomSite">Nom du site (*)</label>
            <input type="text" name="nom" value="<?=$detail_lien['nom']?>" class="form-control col-md-9" id="nomSite" placeholder="Entrez le nom du site" required>
            <div class="invalid-feedback text-left offset-md-3">Vous devez entrez le nom du site</div>
        </div>
        <div class="form-group row">
            <label class="col-md-3" for="urlSite">URL du site (*)</label>
            <input type="url" name="liens" value="<?=$detail_lien['liens']?>" class="form-control col-md-9" id="urlSite" placeholder="Entrez l'adresse du site (URL)" required>
            <div class="invalid-feedback text-left offset-md-3">Le format de l'URL n'est pas correct</div>
        </div>
        <div class="form-group row">
            <label class="col-md-3" for="description">Description</label>
            <textarea class="form-control col-md-9" name="description"  id="description" placeholder="Entrez une description"><?=$detail_lien['description']?></textarea>
            <input type="hidden" name="id" value="<?=$detail_lien['id']?>">
        </div>
        <div class="form-group row">
            <p class="form-text text-center col-md-12">(*) Champs obligatoires</p>
        </div>
        <button type="submit" class="btn btn-primary btn-block offset-md-4 col-md-4">Envoyer les données</button>
    </form>
</main>
<?php if (!empty($reponse)) {
    echo '<div class="alert alert-success align-self-center" role="alert">' . $reponse . '</div>';
} ?>

<?php
// Include config file
$sql = "SELECT * FROM liens";
$query= mysqli_query($db,$sql)
?>

<main class="container">
    <h1 class="text-center mt-4">Admin - Liste des liens</h1>
    <p class="lead">Bienvenue dans cette section qui permet de mettre à jour la liste des liens.</p>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">URL du site</th>
            <th scope="col">description</th>
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
</body>
</html>






