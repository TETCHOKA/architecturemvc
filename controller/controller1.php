<?php


require_once "controller.php";
class User {
    private $db;
    
    // Propriétés correspondant aux colonnes de la table
    private $username;
    private $email;
    private $password;
    private $role_id;
    private $status;
    
    // Constructeur avec injection de la connexion PDO
    public function __construct($db) {
        $this->db = $db;
        $this->status = 'active'; // Valeur par défaut
    }
    
    // Setters
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    public function setPassword($password) {
        // On hache le mot de passe avant de l'assigner
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }
    
    public function setRoleId($role_id) {
        $this->role_id = $role_id;
        return $this;
    }
    
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    
    // Méthode pour vérifier si l'utilisateur existe déjà
    public function exists() {
        $requete1 = "SELECT* FROM breif3.users WHERE username = :username OR email = :email";
        $verif = $this->db->prepare($requete1);
        $verif->bindParam(':username', $this->username);
        $verif->bindParam(':email', $this->email);
        $verif->execute();
        
        return ($verif->fetchColumn() > 0);
    }
    
    // Méthode pour insérer l'utilisateur dans la base de données
    public function save() {
        try {
            // Vérification si l'utilisateur existe déjà
            if ($this->exists()) {
                return false;
            }
            
            $requete = "INSERT INTO breif3.users (username, email, password, role_id, status) 
                      VALUES (:username, :email, :password, :role_id, :status)";
            
            $ver = $this->db->prepare($requete);
            $ver->bindParam(':username', $this->username);
            $ver->bindParam(':email', $this->email);
            $ver->bindParam(':password', $this->password);
            $ver->bindParam(':role_id', $this->role_id);
            $ver->bindParam(':status', $this->status);
            
            return $ver->execute();
        } catch (PDOException $e) {
            // Gestion des erreurs
            error_log("Erreur d'insertion utilisateur: " . $e->getMessage());
            return false;
        }
    }
}