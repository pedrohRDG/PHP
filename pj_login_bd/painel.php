<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('protect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    salve <?php echo $_SESSION['nome'];?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>