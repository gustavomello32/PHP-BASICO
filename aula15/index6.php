<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função ltrim</title>
</head>
<body>
    <div>
        <?php
        $nome = "   José da Silva   ";
        echo(strlen($nome)); // 19 caracteres
        $novo = ltrim($nome); // retira os espaços do inicio
        echo($novo); // 16 caracteres --> imprime "Jose da Silva   "
        echo(strlen($novo)); // 16 caracteres



?>
    </div>
</body>
</html>