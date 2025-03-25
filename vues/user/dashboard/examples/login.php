

<?php

//require_once ("C:/xampp1/htdocs/breif3/controller/controllerlogin.php");
require_once __DIR__ . "/../../../../controller/controllerlogin.php";
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
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
		<title> inscription </title>
		<body>
        <div class="container">
            <div class="form-row col-md-4" style="padding: 20px ; margin-top: 2%; margin-left: 26%; margin-right: 26%; margin-bottom: 10% ;  background-color:hsla(240, 20%, 95%, 0.5)">
	            <div class="form-row">
	            <i>
		            <form method="post">
			            <div class="form-row">
            			    <div class="form-group col-md-12">
            			      <span class="input-group-addon "><label for="inputName4"> <i class="glyphicon glyphicon-envelope"></i></label> </span>
            			      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="votre email...">
            			    </div>
            			    <div class="form-group col-md-12">
            			      <span class="input-group-addon "><label for="inputName4"> <i class="glyphicon glyphicon-lock"></i></label> </span>
            			      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="votre mot de passe ..."><br>
							  <div class="form-check md-4">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="sesouvenir"value="" />
                                                <label class="form-check-label" for="inputRememberPassword">se souvenir de moi</label>
                                            </div><br>
                              <button type="submit" class="btn btn-primary" style="margin-left: 40%" name="connexion">Connexion</button>
            			    </div>
		            	</div>
	            </div>
		</form>
	</div>
</div>
</i>
	</body>
</html>