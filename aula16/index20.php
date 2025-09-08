<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função stripos</title>
</head>
<body>
    <div>
        <?php
        $frase = "Estou aprendendo PHP";
        $pos = stripos($frase, "php");
        print("Encontrado na posição $pos"); // mostra que foi encontrado na posição 17 
        // procura uma substring sem se importar com caixa alta ou baixa

?>
    </div>
</body>
</html>