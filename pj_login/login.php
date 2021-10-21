<?php
    if (isset($_POST['logar'])) {
        //select no usuario
        if(($_POST['login']=='admin') && ($_POST['senha']=='admin')) {
            $_SESSION['usuario'] = 'Felipe Sens';
            echo '<a href="index.php">Acessar</a>';
        } else {
            echo 'Login ou Senha incorreto!';
        }
    }


?>
<form method="post">
    <input type="text" name="login" placeholder="Login">
    <br>
    <input type="password" name="senha" placeholder="Senha">
    <br>
    <input type="submit" name="logar">
</form>