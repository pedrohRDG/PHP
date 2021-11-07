<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('db.php');
    include('protect.php');



    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $campoalterado = $_POST['campoalterado'];
        $valorbusca = $_POST['valorbusca'];

      
        $query = "UPDATE produtos SET $campoalterado = '$valoraalterar' WHERE id = '$produtoalterado' ";
        $result = mysqli_query($mysqli, $query);

    else{

} 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <hr/>
    <h1>Alterar</h1>    
    <form action="" method="POST">
        <p>
            <label>valor a alterar</label>

        </p>
        
        <p>
            <label>produto alterado</label>
            <input type="text" name="valorbusca">
        </p>

        <p>
            <button type="submit">Entrar</button> 
        </p>
    </form>
    <p>
        <a href="logout.php">Sair</a>
        <a href="painel.php">Voltar</a>
    </p>
</body>
</html>