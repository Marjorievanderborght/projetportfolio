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

<main class="container">
    <h1 class="text-uppercase mt-lg-12 font-weight-bolder">Admin - Liste des contacts</h1>
    <p class="lead">Bienvenue dans cette section qui permet de gérer la liste des contacts. Les données ont été encodées par les visiteurs du site via le formulaire de contact.</p>
                <br>
                <?php
                // Include config file
                require_once "files/admin/config.php";

                // Attempt select query execution
                $sql = "SELECT * FROM users";
                if($result = mysqli_query($db, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<div class=\"table-responsive\">";
                        echo " <table class=\"table table-striped\">";
                        echo "<thead class=\"thead-dark\">";
                        echo "<tr>";
                        echo "<th>Nom</th>";
                        echo "<th>Adresse mail</th>";
                        echo "<th>Date</th>";
                        echo "<th>Sujet</th>";
                        echo "<th>Message</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){

                            echo "<tr>";
                            echo "<td class='tableaucontact'>" . $row['username'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['msgDate'] . "</td>";
                            echo "<td>" . $row['sujet'] . "</td>";
                            echo "<td>" . $row['message'] . "</td>";
                            echo "<a href='read.php?id=". $row['username'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                            echo "<a href='update.php?id=". $row['username'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                            echo "<a href='delete.php?id=". $row['username'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                            echo "</td>";
                            echo "</tr>";

                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "<p class='lead'><em>No records were found.</em></p>";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                }

                // Close connection
                mysqli_close($db);
                ?>
</main>
<div class="outer-div">
    <div class="inner-div">
        <a class="btn btn-dark my-2" href="?p=admin_crud">ESPACE ADMIN</a>
    </div>
    <div>

<!--MY FOOTER -->
<?php include "files/content/footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
