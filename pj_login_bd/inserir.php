<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('db.php');
    include('protect.php');

    if ( !isset( $_POST ) || empty( $_POST ) ) {
        $erro = 'Nada foi postado.';
    } 
    else {
        $nomeproduto = $_POST['nomeproduto'];
        $marcaproduto = $_POST['marcaproduto'];
        $quantidadeproduto = $_POST['quantidadeproduto'];
        $valorproduto = $_POST['valorproduto'];
        $valorestoque = $valorproduto*$quantidadeproduto;

        $sql_code = "INSERT INTO produtos (nomeproduto,marcaproduto,quantidadeproduto,valorproduto,valorestoque) 
        VALUES ('$nomeproduto','$marcaproduto','$quantidadeproduto','$valorproduto','$valorestoque')";

        mysqli_query($mysqli,$sql_code);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">   
    <title>painel</title>
</head>
<body>
    <div class="menu">
            <h1>Menu</h1>
            <a href="inserir.php"><button  class="botao">Inserir</button></a>
            <a href="consultar.php"><button  class="botao">Consultar</button></a>  
            <a href="alterar.php"><button  class="botao">Alterar</button></a> 
            <a href="excluir.php"><button  class="botao">Excluir</button></a>  
    </div>

    <hr/>
    <h1>Insira o produto aqui</h1>    
    <form action="" method="POST">
        <p>
            <label>Nome do produto</label>
            <input type="text" name="nomeproduto">
        </p>
        <p>
            <label>Valor do produto</label>
            <input type="number" step="0.010" name="valorproduto">
        </p>
        <p>
            <label>Marca do produto</label>
            <input type="text" name="marcaproduto">
        </p>
        <p>
            <label>Quantidade de produto</label>
            <input type="number" name="quantidadeproduto">
        </p>
        <p>
            <button type="submit">Enviar</button> 
        </p>
    </form>
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>