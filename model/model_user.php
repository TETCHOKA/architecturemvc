<?php

$base = new PDO("mysql:dbname=breif3; host=localhost", "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Création d'un nouvel utilisateur
            $user = new User($base);
            $user->setUsername($username)
                 ->setEmail($email)
                 ->setPassword($password)
                 ->setRoleId(2);


?>