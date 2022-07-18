<?php

session_start();



require_once './functions/autoLoad.php';
require __DIR__ . '/vendor/autoload.php';
autoLoad("*.php");

$_SESSION['message'] = 'Blabla';
dump($_SESSION);
// Définir le fuseau horaire dans lequel le serveur se trouve
date_default_timezone_set('Europe/Paris');
$pdo = pdo();
dump(pdo());
/* Utiliser include ou require
* include renvoie un avertissement simple en cas d'erreur
* require renvoie une erreur fatale et arrête l'exécution du script
*/
require_once './includes/header.php';
require_once './includes/main.php';
require_once './includes/footer.php';
