<h1>Qual seu nome ?</h1>
<form method="POST" action="header.php">
    <input type="text" name="userName">
    <br>
    <input type="submit" value="Salvar">
    <?php 
    session_start();
        if($_SESSION['nameInvalid']) {
            echo "<br>";
            echo $_SESSION['nameInvalid'];
            $_SESSION['nameInvalid'] = null;
        }
    ?>
</form>