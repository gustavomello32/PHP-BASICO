<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $an = $_GET['a'];
    $aa = 2025;
    $idade = $aa - $an;
    $sit = ($idade>17 && $idade<65) ? "OBRIGATÓRIO" : "NAO OBRIGATÓRIO";
    echo "Quem nasceu em $an tem $idade";
    echo "<br>o eleitor pode votar? $sit";

?>
</body>
</html>