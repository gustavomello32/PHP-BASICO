<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função strtolower</title>
</head>
<body>
    <div>
        <?php
        $nome = "GUsTavO GuaNabArA";
        $nome2 = strtolower($nome); // retira as letras maiusculas
        echo "Seu nome é $nome2"; // Seu nome é gustavo guanabara

?>
    </div>
</body>
</html>