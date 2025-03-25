<?php

// Démarrer la session si elle n'est pas déjà démarrée
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Détruire toutes les variables de session
$_SESSION = array();

// Effacer le cookie de session si il existe
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Détruire la session
session_destroy();

// Supprimer également les cookies "se souvenir de moi" si vous en avez
if(isset($_COOKIE['email'])) {
    setcookie('email', '', time() - 3600, '/');
}

// Rediriger vers la page de connexion
header('Location: login.php');
exit();

?>