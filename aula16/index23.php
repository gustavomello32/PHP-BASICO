<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função str_pad</title>
</head>
<body>
    <div>
        <?php
        $nome = "Guanabara";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);    // enche ou preenche uma string ate ela atingir um tamanho que voce quiser       
        print("Meu professor $novo é lindo!"); // Meu professor Guanabara               é lindo!
?>
    </div>
</body>
</html>