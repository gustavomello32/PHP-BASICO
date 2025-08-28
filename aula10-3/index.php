<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Personalizado</title>
    <style>
        span.numero {
            margin-right: 10px;
            font-weight: bold;
            color: darkblue;
            display: block;
        }
        a {
            text-decoration: none;
            color: burlywood;
            border-radius: 6px;
        }
        a:hover {
            text-decoration: overline;
            background-color: blue;
        }
    </style>
</head>
<body>
    <?php
    $inicio = isset($_GET["v1"])? $_GET["v1"] : 0;
    $final = isset($_GET["v2"])? $_GET["v2"] : 0;
    $incremento = isset($_GET["v3"])? $_GET["v3"] : 1;

    echo "<h2>Contando de $inicio ate $final, de $incremento em $incremento:</h2>";
    // se o inicio é menor que o final (contagem crescente)
    if ($inicio <= $final){
        for ($i = $inicio; $i <= $final; $i +=  
       $incremento){
            echo "<span class = 'numero'>$i</span>";
        }
    }
    // se o inicio é maior que o final (contagem descrescente)
    else {
        for($i = $inicio; $i >= $final; $i -= $incremento){
            echo "<span class = 'numero'>$i</span><br>";
        }
    }
?>
<a href="formulario.php">Voltar</a>
</body>
</html>