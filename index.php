<?php
session_start();
/*
* Ceci sera le contrôleur frontal, càd toutes les requêtes passeront par ce fichier
*/
// si la variable d'url p n'existe pas
if(!isset($_GET["p"])){
    // on importe le fichier accueil.php qui se trouve dans le dossier files, include permet d'importer n'importe quel fichier local
    include "files/portfolio/accueil.php";

// "p" existe
}else{

    $p = $_GET["p"];



    switch ($p) {
        case "tuto":
            include "files/portfolio/tutoriel.php";
            break;
        case "aboutme":
            include "files/portfolio/aboutme.php";
            break;
        case "galerie":
            include "files/portfolio/galerie.php";
            break;
        case "liens":
            include "files/portfolio/liens.php";
            break;
        case "cv":
            include "files/portfolio/cv.php";
            break;
        case "contact":
            include "files/portfolio/mecontacter.php";
            break;
        case "admin_crud":
            include "files/admin/admin_crud.php";
            break;
        case "login":
            include "files/admin/login.php";
            break;
        case "logout":
            include "files/admin/logout.php";
            break;
        case "crud_contacts":
            include "files/admin/crud_contacts.php";
            break;
        case "create":
            include "files/admin/create.php";
            break;
        case "update":
            include "files/admin/update.php";
            break;
        case "delete":
            include "files/admin/delete.php";
            break;
        case "create_gallery":
            include "files/admin/create_gallery.php";
            break;
        default:
            include "files/portfolio/accueil.php";
    }
}

?>