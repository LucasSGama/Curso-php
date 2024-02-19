<?php

    $opc=1; //1:Carro - 2:Moto - 3:Bicicleta - 4:návio - 5:avião

    switch($opc) {
        case 1:
            echo "Carro";
            break;
        case 2:
            echo "Moto";
            break;
        case 3:
            echo "Bicicleta";
            break;
        case 4:
            echo "Návio";
            break;
        case 5:
            echo "Avião";
            break;
        default:
            echo "Transporte inválido";
            break;
    }
    echo "<hr>";
    switch($opc) {
        case ($opc <= 3 and $opc > 0):
            echo "Transporte terrestre";
            break;
        case 4:
            echo "Transporte maritimo";
            break;
        case 5:
            echo "Transporte aéreo";
            break;
        default:

    }
    

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 6 de PHP - Condicional SWITCH CASE</title>
    </head>
    <body>
        
    </body>
</html>
