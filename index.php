<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

            // Coloque seu código aqui!
            // PHP tem uma tipagem dinamica (boolean - Integer/Int - float - string com aspas simples(chama texto) ou duplas(chama variavel e texto) - array)
            // echo "Hello World"; - serve para mostrar o texto na tela
            // $nome - O $ cria variavel no php
            // define("MEU_CARRO") - forma de adicionar uma constante
            // var_dump serve para printar um teste - como o console.log
            

            $frutas = array( "maça" , "banana" , "laranja");

            var_dump( $frutas);

            echo "<pre>";
            $frutasMatrix = array( "maça" => array("argentina" , "gala") ,
                                 "banana" => array("da terra" , "nanica", "maça"),
                                 "laranja" => array("pera", "lima"));

            var_dump( $frutas);
            echo("</br>");      
            echo("</br>");
            var_dump( $frutasMatrix);
            
        ?>

    </body>
</html>