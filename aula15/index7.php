<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função rtrim</title>
</head>
<body>
    <div>
        <?php
        $nome = "   José da Silva   ";
        echo(strlen("$nome")); // 19 caracteres
        $novo = rtrim($nome); // remove os espaços do final
        echo ($novo);
        echo(strlen($novo)); // 16 caracteres

?>
    </div>
</body>
</html>