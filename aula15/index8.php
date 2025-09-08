<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçao str_word_count</title>
</head>
<body>
    <div>
        <?php
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0); // calcula o numero de palavras na variavel
        // 0- conta o numero de palavras
        // 1- cria um vetor
        // 2- cria o vetor e mostra as posições em que cada palavra vai começar
        echo $cont; // exibi o numero 5

?>
    </div>
</body>
</html>