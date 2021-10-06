
<?php
    session_start();
    $pagina = $_SESSION["pagina"];
    $matriz = array();

    if ($pagina == 1) {
        echo 'Paginação !! 🙅‍♀️VAPO🙅‍♂️  🔥🚀forget🚀';
        echo '<br/><br/>';
    }

#define os valores da array 

    for ($i = 0; $i < 70; $i++) { 
        for ($j = 0; $j < 5; $j++) { 
            $matriz[$i][$j] = rand(0,100);
            }
    }

#mostra os valores da array s

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

    #links

    for ($i = 1; $i <= 10; $i++) {
        echo "<a href=\"?pagina={$i}\">{$i}</a> ";
    }


    
?>