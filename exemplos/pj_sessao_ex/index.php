<?php
    session_start();
    if (isset($_POST['salvar'])) {

        $_SESSION['valor'] = $_POST['valor'];
        echo "Valor alterado com sucesso!";
        echo ('<br>');
    }
  
?>

<a href="sessoes_2.php">teste</a>

<hr>

<form method="post">
    <input type="text" name="valor">
    <input type="submit" name="salvar">
</form>