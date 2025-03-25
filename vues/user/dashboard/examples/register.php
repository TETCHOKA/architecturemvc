



<?php

require_once ("C:/xampp1/htdocs/breif3/controller/controller1.php");
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
		<title>connexion</title>
		<body>
        <div class="container">
            <div class="form-row col-md-6" style="padding: 20px ; margin-top: 2%; margin-left: 26%; margin-right: 26%; margin-bottom: 10% ;  background-color:hsla(240, 20%, 95%, 0.5)">
	            <div class="form-row " >
	            <i>
		            <form method="post">
			            <div class="form-row" >
            			    <div class="form-group col-md-12">
            			      <span class="input-group-addon "> <label for="inputName4"> <i class="glyphicon glyphicon-user"></i></label> </span>
            			      <input type="text" class="form-control" id="inputuser4" name="username" placeholder="nom d'utilisateur ...">
            			    </div>

            			    <div class="form-group col-md-12">
            			      <span class="input-group-addon "> <label for="inputName4"> <i class="glyphicon glyphicon-envelope"></i></label> </span>
            			      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="votre email...">
            			    </div>
            			    
            			    <div class="form-group col-md-12">
            			      <span class="input-group-addon "> <label for="inputName4"> <i class="glyphicon glyphicon-lock"></i></label> </span>
            			      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="votre mot de passe ...">
            			    </div>
							<div class="form-group col-md-12">
            			      <span class="input-group-addon "> <label for="inputName4"> <i class="glyphicon glyphicon-lock"></i></label> </span>
            			      <input type="password" class="form-control" id="inputPassword4" name="password_confirm" placeholder="confirmez votre mot de passe ...">
            			    </div>
		            	</div>
	            </div>
				<div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Vous Avez un compte? Connectez-vous</a></div>
                                    </div>
				<div class="form-row" >
                    
				  <button type="submit" class="btn btn-primary " name="inscription">Inscription</button>
				</div>
		</form>
	</div>
</div>


</i>

	</body>
</html>
