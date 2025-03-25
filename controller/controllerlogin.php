<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Traitement du formulaire lors de la soumission
if(isset($_POST['connexion'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password']; // Ne pas hasher le mot de passe ici!
    
    // Connexion à la base de données
    $base = new PDO("mysql:dbname=breif3; host=localhost", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Requête pour vérifier si l'utilisateur existe
    $requete = $base->prepare("SELECT * FROM breif3.users WHERE email = :email");
    $requete->bindParam(':email', $email);
    $requete->execute();
    
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);
    
    if($utilisateur) {
        // Vérification du mot de passe (en supposant qu'il est hashé avec password_hash)
        if(password_verify($password, $utilisateur['password'])) {
            // Stockage des informations dans la session
            $_SESSION['id_user'] = $utilisateur['id_user'];
            $_SESSION['email'] = $utilisateur['email'];
            $_SESSION['username'] = $utilisateur['username'];
            $_SESSION['password'] = $utilisateur['password'];
            $_SESSION['connecte'] = true;
            
            // Si la case "se souvenir de moi" est cochée
            if(isset($_POST['sesouvenir'])) {
                // Définir un cookie qui durera 30 jours
                setcookie('email', $email, time() + (86400 * 30), "/");
            }
            
            // Redirection vers la page compte.php
            header('Location: compte.php');
            exit();
        } else {
            $erreur = "Mot de passe incorrect";
        }
    } else {
        $erreur = "Cet email n'est pas inscrit";
    }
}
?>