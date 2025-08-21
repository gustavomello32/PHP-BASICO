<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual Identico</title>
</head>
<body>
    <?php
    $a = 3;
    $b = "3";
    $r = ($a == $b)? "SIM": "NAO";
    //igual independente do seu tipo
    echo "As variaveis A e B sao iguais? $r";

    $a = 3;
    $b = "3";
    $r = ($a === $b)? "SIM": "NAO";
    echo "<br>As variasveis A e B sao identicas? $r";
    //tem que ser igual e do mesmo tipo
?>    
</body>
</html>