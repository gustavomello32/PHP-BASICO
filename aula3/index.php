<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1 + $n2) /2;

    echo "<h1>Valores recebidos 5 e 8</h1>";

    echo "A soma vale " . ($n1 + $n2) ;
    echo " </br> A subtração vale " . ($n1 - $n2);
    echo " </br>  A multiplicação vale " . ($n1 * $n2);
    echo " </br>  A divisão vale " . ($n1 / $n2);
    echo " </br>  O módulo vale " . ($n1%$n2);
    echo " </br> A média é igual a $m"
?>
</body>
</html>