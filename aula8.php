<?php

    $i=4;
    $tam=3;

    echo "Loop Do While<br>";
    do {
        echo "<pre>Variável i tem o valor..: $i<br>";
        echo "Variável tam tem o valor: $tam</pre><br>";
        $i++;
    } while ($i < $tam);

    echo "<br><hr><br>";

    echo "Loop While<br><br>";

    $i=4;
    $tam=3;
    while ($i < $tam) {
        echo "<pre>Variável i tem o valor..: $i<br>";
        echo "Variável tam tem o valor: $tam</pre><br>";
        $i++;
    }

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 8 de PHP - Loop Do WHile</title>
    </head>
    <body>
        
    </body>
</html>
