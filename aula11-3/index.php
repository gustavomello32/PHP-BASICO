<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Tabuada</title>
</head>
<body>
    <div>
    <?php
    $num = isset($_GET["val"])? $_GET["val"]: 1;

    echo "A tabuada de $num é:<br>";

    for ($i = 1; $i <=10; $i++) {
        $resultado = $num * $i;
        echo "$num X $i = $resultado <br>";
    }
?>
</div>
<a href="formulario.php">Voltar</a>
</body>
</html>