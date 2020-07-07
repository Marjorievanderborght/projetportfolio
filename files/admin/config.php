<?php
// Paramètres de connexion à notre DB
define("DB_HOST","sqlgold.webmo.fr");
define("DB_PORT",48614);
define("DB_NAME","web2020marjorie");
define("DB_LOGIN","web2020marjorie");
define("DB_PWD","IBw8YTf94KZ");
define("DB_CHARSET","utf8");

// connexion à la base de donnée MY SQL
$db = @mysqli_connect("sqlgold.webmo.fr", "web2020marjorie", "IBwx8yTf94KZ", "web2020marjorie", 48614);
// communication se fera en utf8
mysqli_set_charset($db, "utf8");

// Verifier la connexion à la base de donnees
if($db === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
