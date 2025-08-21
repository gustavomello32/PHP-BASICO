<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $preco = $_GET["p"];
    echo "o preço do produto é R$" . number_format($preco, 2);
    $preco -= ($preco*10/100);
    echo "<br> e o novo preço com 10% de desconto sera em R$" . number_format($preco, 2);
?>
</body>
</html>