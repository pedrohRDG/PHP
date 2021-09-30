<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        #echo "Pagina: ".$_GET["pagina"]."<br>";
        #echo "Cor: ".$_GET["cor"]."<br>";
        #echo "Tamanho".$_GET["tamanho"]."<br>";


        echo 'Paginação de 10 em 10 linhas!! 🙅‍♀️VAPO🙅‍♂️  🔥🚀forget🚀';

#define os valores da array 

        $pagina = $_GET["pagina"];
        $valor =1;
        $matriz = array();
            for ($i = 0; $i < 70; $i++) { 
                for ($j = 0; $j < 5; $j++) { 
                    $matriz[$i][$j] = $valor;
                    $valor++;
                    }
            }

#mostra os valores da array 

        echo ('<table>');

            for ($i = $pagina*10; $i < ($pagina*10)+9; $i++) { 
                echo ('<tr>');
                    for ($j = 0; $j < 5; $j++) { 
                        echo ('<td>');
                        echo ($matriz[$i][$j]);
                        echo ('</td>');
                    }
                echo ('</tr>');
            }
    
        echo ('</table>');




    
?>

   
</body>
</html>