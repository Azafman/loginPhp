<?php 
session_start();
$usuarioNome = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);

if($usuarioNome) {
    setcookie('usuarioName', $usuarioNome, time() + (86400 * 30));  
    header('location: home.php');
} else {
    $_SESSION['nameInvalid'] = 'Digite um nome válido';
    header('location: login.php');
}

?>