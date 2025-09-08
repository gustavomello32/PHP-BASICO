<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função str_split</title>
</head>
<body>
    <div>
        <?php
        $nome = "Maria";
        $vetor = str_split($nome); // cria variavel, cada letra vira um indice ao inves de ser cada palavra com o explode
        print_r($vetor);

?>
    </div>
</body>
</html>