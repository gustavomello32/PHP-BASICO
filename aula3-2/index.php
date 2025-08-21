<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes aritmeticas</title>
    <style>
        h2 {
            font-size: 2em;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "<br>O valor absoluto de $v2 e " . abs($v2);
        echo " <br>O valor de $v1<sup>$v2<sup> e" . pow($v1, $v2);
        echo "<br>O valor da raiz quadrada de $v1 e " . sqrt($v1);
        echo "<br>O valor de $v2 arredondado é " . round($v2); // ceil-para cima floor-para baixo
        echo "<br>A parte inteira de $v2 é" . intval($v2);
        echo "<br>O valor de $v2 em moeda e R$" . number_format($v2,2,",", "." );
?>
</body>
</html>