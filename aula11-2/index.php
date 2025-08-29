<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Fatorial</title>
    <style>
        .botao {
            background-color: black;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
        $v = isset($_GET["val"])? $_GET["val"] : 1;
        echo "<h1>Calculando o Fatorial de $v</h1>";
        $c = $v; //Um contador que começa com o valor original
        $fat = 1; //Variavel onde o fatorial sera acumulado
        do { //repita
            $fat = $fat * $c; //Multiplica o fatorial atual pelo contador
            $c--; //Decrementa o contador
        } while ($c >= 1); //enquanto
        echo "<h2>$v ! = $fat</h2>"
?>
<a href="formulario.php"><span class="botao">Voltar</span></a>
</body>
</html>