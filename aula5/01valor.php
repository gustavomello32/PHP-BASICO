<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt ($valor);
    echo "a raiz de $valor é igual a " . number_format($rq,2);
?>
<br>
<a href="index.php">Voltar</a>
</body>
</html>