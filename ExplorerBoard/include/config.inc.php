<?php
// Param�tres de l'application Covoiturage
// A modifier en fonction de la configuration

define('DBHOST', "localhost");
define('DBNAME', "explorerboard");
define('DBUSER', "bd");
define('DBPASSWD', "bede");
define('ENV','dev');
define('SALT','48@!alsd');
define('DBPORT',3306);

$db =mysqli_connect ("localhost","bd","bede");
mysqli_select_db($db,"explorerboard");
// pour un environememnt de production remplacer 'dev' (d�veloppement) par 'prod' (production)
// les messages d'erreur du SGBD s'affichent dans l'environememnt dev mais pas en prod
?>