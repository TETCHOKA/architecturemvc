<?php
session_status();

if(isset($_POST['connexion'])){
    header("location:dashboard.php");
}

?>