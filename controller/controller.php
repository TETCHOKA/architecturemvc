<?php

// Traitement du formulaire d'inscription
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    $errors = [];
    
    // Validation des données
    if (empty($username)) {
        $errors[] = "Le nom d'utilisateur est obligatoire";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }
    
    if (empty($password)) {
        $errors[] = "Le mot de passe est obligatoire";
    }
    
    if ($password !== $password_confirm) {
        $errors[] = "Les mots de passe ne correspondent pas";
    }
    
    // S'il n'y a pas d'erreurs, on crée l'utilisateur
    if (empty($errors)) {
        try {
            // Création d'une instance PDO pour la connexion à la Base de donnée
             
            require_once ("C:/xampp1/htdocs/breif3/model/model_user.php");
            // Sauvegarde de l'utilisateur
            if ($user->save()) {
                // Redirection vers la page de connexion
                header('Location: login.php?inscription=success');
                exit;
            } else {
                $errors[] = "Ce nom d'utilisateur ou cet email est déjà utilisé";
            }
        } catch (PDOException $e) {
            $errors[] = "Erreur de connexion à la base de données";
            error_log($e->getMessage());
        }
    }

    // Affichage des erreurs
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<div class="error">' . htmlspecialchars($error) . '</div>';
        }
    }
}
?>