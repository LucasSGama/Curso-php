<?php

    session_start();
    echo "<h3>Terceira página</h3>";
    echo $_SESSION['vnome'];
    echo "<br>".$_SESSION['vtexto'];
    echo "<br>".$_SESSION['vcanal'];

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 19 de PHP - Sessão</title>
    </head>
    <body>
        
    <br><br>
    <a href="aula19.php" target="_self">Voltar aula 19</a><br>
    <a href="pg1.php" target="_self">Segunda página</a>

    
    </body>
</html>