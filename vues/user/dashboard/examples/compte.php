
<?php

// Démarrage de la session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Vérifier si l'utilisateur est connecté
if(!isset($_SESSION['connecte']) || $_SESSION['connecte'] !== true) {
    // Si non connecté, rediriger vers la page de connexion
    header('Location: login.php'); // Remplacez par le nom de votre page de connexion
    exit();
}
//require_once ("C:/xampp1/htdocs/breif3/controller/controller1.php");
// Ici le reste du code de la page compte.php
$email = $_SESSION['email'];
$user_name = $_SESSION['username'];

?>





<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html> 
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<title>connexion</title>
		<body style="align-content: center;">
        <div class="container" style="border-style: solid; border-width:0.2px; height:200px; width:400px; align-content:center; padding-left:50px; border-radius:20px;">
<h3>Bienvenue <?php
 echo $user_name;
?></h3><a href="deconnexion.php" class="btn btn-danger">Déconnexion</a>       
<a href="profiluser.php" class="btn btn-primary">Voir mes informations</a>   
				</div>
		</form>
	</div>
</div>


</i>

	</body>
</html>
