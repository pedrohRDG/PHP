<?php
    if (!isset($_SESSION['usuario'])) {
        echo 'Falha no sistema.<br>';
        echo 'Você precisa se autenticar!<br>';
        echo '<a href="index.php">Voltar</a>';
        exit();
    }


?>
<a href="?desconectar=true">Desconectar</a>
<hr>
<h1>Olá <?=$_SESSION['usuario']?></h1>