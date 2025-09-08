<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função chr</title>
</head>
<body>
    <div>
        <?php
        $letra = chr(67); // chr(67) transforma o número 67 na letra C, usando a tabela ASCII. 
        // caso coloque (99) vai retornar "c" em minusculo
        echo "A letra de codigo 67 e $letra";
?>
    </div>
</body>
</html>