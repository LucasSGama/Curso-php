<?php

$texto="Curso de PHP";
$nome="Lucas";
$canal="vlog do fessor bruno";

echo "<a href=pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&cn=".urlencode($canal)." target=_self>Abre pg1</a>";

?>

<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>Aula 18 de PHP - Passagem de valores</title>
    </head>
    <body>
        
    </body>
</html>
