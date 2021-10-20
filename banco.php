<?php

try {

    $conn = new PDO('mysql:host=localhost;dbname=base_do_marcondes', 'root', '');
    $conn -> setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'ERROR: ' . $e -> getMessage();
}


/*
$stmt = $conn -> prepare('SELECT cidades. *, 
                            estados.sigla AS estado_sigla, 
                            estados.nome AS estado_nome 
                              FROM cidades,estados 
                            WHERE cidades.estado = estados.id');
*/


//$stmt -> execute();
//$result = $stmt -> fetchAll();
//print_r($result);
//foreach($resultado as $linha)



?>