<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('db.php');
    include('protect.php');


    $consulta = "SELECT * FROM produtos";
    $resultconsulta = mysqli_query($mysqli, $consulta);
    echo "<table border>";
    echo "<tr>";
    echo "<td> ID </td>";
    echo "<td> Nome </td>";
    echo "<td> Valor Unitario </td>";
    echo "<td> Marca </td>";
    echo "<td> Quantidade </td>";
    echo "<td> Valor Total </td>";
    echo "</tr>"; 
        while($fetch = mysqli_fetch_row($resultconsulta)){
            echo "<tr>";
            foreach ($fetch as $value) {
                echo "<td>";   
                echo $value;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";



    if ( !isset( $_POST ) || empty( $_POST ) ) {

        echo "Preencha as informações abaixo para alterar o produto.";

    }
    else{
        $campoalterado = $_POST['campoalterado'];
        $produtoalterado = $_POST['produtoalterado'];
        $valoraalterar = $_POST['valoraalterar'];

      
        $query = "UPDATE produtos 
                     SET $campoalterado = '$valoraalterar' 
                   WHERE id = '$produtoalterado' ";

        $result = mysqli_query($mysqli, $query);
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
    <nav class="menu">
            <h1>Menu</h1>
            <a href="inserir.php"><button  class="botao">Inserir</button></a>
            <a href="consultar.php"><button  class="botao">Consultar</button></a>  
            <a href="alterar.php"><button  class="botao">Alterar</button></a> 
            <a href="excluir.php"><button  class="botao">Excluir</button></a>  
    </nav>
    <hr/>
    <h1>Alterar</h1>    
    <form action="" method="POST">
        <p>
            <label>Codigo do produto a alterar</label>
            <input type="text" name="produtoalterado">
        </p>

        <p>
            <label>valor a alterar</label>
            <select name="campoalterado">
                <option value="nomeproduto">Nome do produto</option>
                <option value="marcaproduto">Marca do produto</option>
                <option value="valorproduto">Valordo produto</option>
                <option value="quantidadeproduto">Quantidade</option>
            </select>
        </p>

        <p>
            <label>Alterar para</label>
            <input type="text" name="valoraalterar">
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