<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função str_replace</title>
</head>
<body>
    <div>
        <?php
        $frase = "Gosto de estudar Matematica!!!";
        $novafrase = str_replace("Matematica", "PHP", $frase); // substitui a palavra Matematica por PHP
        echo "$novafrase"; // imprimi --> Gosto de estudar PHP
        // da pra usar o str_ireplace -- ele ignora se é caixa alta ou nao
?>
    </div>
</body>
</html>