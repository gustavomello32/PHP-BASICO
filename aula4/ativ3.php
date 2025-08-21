<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
</head>
<body>
    <?php
        $a = 3;
        $b = $a;
        $b += 5;
        echo " a variavel A vale $a";
        echo "<br>a variavel B vale $b";
        // OUTRO EXEMPLO USANDO REFERENCIA
        $x = 3;
        $y = &$x; // o & faz com que $y seja uma referência para $x, ou seja, os dois apontam para o mesmo valor na memória
        $y += 5;
        echo "<br>a variavel X vale $x";
        echo "<br>a variavel Y vale $y"
?>
</body>
</html>