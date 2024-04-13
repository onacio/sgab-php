<?php
#session_start();
#$_SESSION["username"] = "onacio";

if(!isset($_SESSION['username'])){
    header('Location:views/login.php');
}

?>
<h1>Página index</h1>