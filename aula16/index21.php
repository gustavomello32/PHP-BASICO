<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função substr_count</title>
</head>
<body>
    <div>
        <?php
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($frase, "PHP"); // contabiliza quantas vezes a palavra PHP esta na frase guardada na variavel $frase
        print("PHP encontrado $cont vezes"); // "PHP encontrado 2 vezes
?>
    </div>
</body>
</html>