<?php
    if(!isset($_SESSION)){
        session_start();
    }

    include('db.php');
    include('protect.php');



    if ( !isset( $_POST ) || empty( $_POST ) ) {

        $query = "SELECT * FROM produtos";
        $result = mysqli_query($mysqli, $query);
        echo "<table border>";
        echo "<tr>";
        echo "<td> ID </td>";
        echo "<td> Nome </td>";
        echo "<td> Valor Unitario </td>";
        echo "<td> Marca </td>";
        echo "<td> Quantidade </td>";
        echo "<td> Valor Total </td>";
        echo "</tr>"; 
            while($fetch = mysqli_fetch_row($result)){
                echo "<tr>";
                foreach ($fetch as $value) {
                    echo "<td>";   
                    echo $value;
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
}

    else{

        $campobusca = $_POST['campobusca'];
        $valorbusca = $_POST['valorbusca'];

      

        $query = "SELECT * FROM produtos WHERE $campobusca = '$valorbusca' ";
        $result = mysqli_query($mysqli, $query);
        echo "<table border>";
        echo "<tr>";
        echo "<td>ID</td>";
        echo "<td>Nome</td>";
        echo "<td>Valor</td>";
        echo "<td>Quantidade</td>";
        echo "<td>Valor total</td>";
        echo "<td>Marca</td>";
        echo "</tr>";
        while($fetch = mysqli_fetch_row($result)){
            echo "<tr>";
            foreach ($fetch as $value) {
                echo "<td>"; 
                echo $value;
                echo "</td>"; 
            }
            echo "</tr>";     
        }
        
        echo "</table>";


} 



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
    <nav class="menu">
            <h1>Menu</h1>
            <a href="inserir.php"><button  class="botao">Inserir</button></a>
            <a href="consultar.php"><button  class="botao">Consultar</button></a>  
            <a href="alterar.php"><button  class="botao">Alterar</button></a> 
            <a href="excluir.php"><button  class="botao">Excluir</button></a>  
    </nav>
    <hr/>
    <h1>Filtrar por</h1>    
    <form action="" method="POST">
        <p>
            <label>campo de busca</label>
            <select name="campobusca">
                <option value="nomeproduto">Nome do produto</option>
                <option value="id" selected>Id</option>
                <option value="marcaproduto">Marca do produto</option>
                <option value="valorproduto">Valordo produto</option>
                <option value="quantidadeproduto">Quantidade</option>
            </select>

        </p>
        
        <p>
            <label>valor a buscar</label>
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