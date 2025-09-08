<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçao trim</title>
</head>
<body>
    <div>
        <?php
        $nome = "   José da Silva   ";
        echo(strlen("$nome")); // 19 caracteres
        $novo = trim($nome); // 13 caracteres, contanto com os espaços do meio
        echo($novo); // 13 caracteres conta apenas os espaços do meio
?>
    </div>
</body>
</html>