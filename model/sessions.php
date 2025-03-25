<?php


require_once "controller.php";
class Connexion {
    private $db;
    
    // Propriétés correspondant aux colonnes de la table
    private $user_id;
    private $logout_time;
    private $login_time;
    
    // Setters
    public function setUser_id($user_id) {
        $this->user_id = $user_id;
        return $this;
    }
    
    public function setLogin($login_time) {
        $this->login_time = $login_time;
        return $this;
    }
    
    public function setLogout($logout_time) {
        $this->logout_time = $logout_time;
        return $this;
    }
    
     // getters
     public function getUser_id() {
        $this->user_id ;
        
    }
    
    public function  getLogin() {
        $this-> login_time;
        
    }
    
    public function  getLogout() {
        $this->logout_time;
        return $this;
    }
       
    
    // Méthode pour insérer l'utilisateur dans la base de données
    public function save() {
        try {
            // Vérification si l'utilisateur existe déjà
            
            
            $requete = "INSERT INTO breif3.sessionq (user_id, login_time, logout_time) 
                      VALUES (:user_id, :login_time, :logout_time)";
            
            $ver = $this->db->prepare($requete);
            $ver->bindParam(':user_id', $this->user_id);
            $ver->bindParam(':login_time', $this->login_time);
            $ver->bindParam(':logout_time', $this->logout_time);
            
            return $ver->execute();
        } catch (PDOException $e) {
            // Gestion des erreurs
            error_log("Erreur d'insertion utilisateur: " . $e->getMessage());
            return false;
        }
    }
}