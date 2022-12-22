<?php 
setcookie('usuarioName', '', time() - 3600);
header('Location: login.php');
?>