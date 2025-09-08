<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função strpos</title>
</head>
<body>
    <div>
        <?php
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "$frase <br>A string foi encontrada na posição $pos" // A string php se encontra na posição 17, contando os caracteres ate o "P" de "PHP" = 17

?>
    </div>
</body>
</html>