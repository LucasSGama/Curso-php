<?php


    if (Isset($_POST["f_nome"])) {
        $vnome=$_POST["f_nome"];
        echo "Nome: $vnome<br>";
    } else {
        echo "Dados não submetidos";
    

?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <title>Aula 17 de PHP - Isset</title>
</head>
<body>
    <br><br>
    <form action="aula17.php" name="f_aula" method="post">
    <label for="f_nome">Nome:</label><br>
    <input type="text" name="f_nome"><br>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>

<?php }
?>

