<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função explode</title>
</head>
<body>
    <div>
        <?php
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site); // corta essa string toda vez que encontrar um espaço
        print_r($vetor);
        // quebra a string $site em partes, separando por espaços (" ") -- e joga tudo dentro de um array
?>
    </div>
</body>
</html>