<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função implode</title>
</head>
<body>
    <div>
        <?php
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Vídeo";
        $texto = implode("#", $vetor); // nesse caso vai colocar # entre os indices, porem pode utilizar com espaços.
        print($texto); // VAI MOSTRAR ASSIM --> Curso#em#Vídeo 

        // A FUNÇÃO join() faz exatamente a mesma coisa

?>
    </div>
</body>
</html>