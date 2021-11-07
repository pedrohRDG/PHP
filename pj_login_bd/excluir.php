<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('db.php');
    include('protect.php');



    if ( !isset( $_POST ) || empty( $_POST ) ) {

        echo "Preencha as informações abaixo para excluir o produto.";

    }
    else{
        $campobusca = $_POST['campobusca'];
        $valorbusca = $_POST['valorbusca'];

      
        $query = "DELETE FROM produtos WHERE  $campobusca = '$valorbusca' ";

        $result = mysqli_query($mysqli, $query);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr/>
    <h1>Excluir</h1>    
    <form action="" method="POST">
        <p>
            <label>Filtrar por</label>
            <select name="campobusca">
                <option value="nomeproduto">Nome do produto</option>
                <option value="id" selected>Id</option>
                <option value="marcaproduto">Marca do produto</option>
                <option value="valorproduto">Valordo produto</option>
                <option value="quantidadeproduto">Quantidade</option>
            </select>

        </p>
        
        <p>
            <label>valor de busca</label>
            <input type="text" name="valorbusca">
        </p>

        <p>
            <button type="submit">Enviar</button> 
        </p>
    </form>
    <p>
        <a href="logout.php">Sair</a>
        <a href="painel.php">Voltar</a>
    </p>

</body>
</html>