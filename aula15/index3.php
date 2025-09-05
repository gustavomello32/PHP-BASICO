<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funçao wordwrap</title>
</head>
<body>
    <?php
    $t = "Este é um exemplo de texto gigante criado pelo php que vai mostrar o funcionamento da função wordwrap";
    $r = wordwrap($t, 20, "<br>");
    echo $r;

    // esse comando vai inserir um <br> a caa 20 caracteres, mas sem cortar palavras no meio. Ele tenta quebrar na palavra mais proxima do limite de 20.
?>
</body>
</html>