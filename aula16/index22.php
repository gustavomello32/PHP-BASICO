<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função substr</title>
</head>
<body>
    <div>
        <?php
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5); // -- substr(texto, posição_inicial, quantidade_de_caracteres)
        // nesse caso começa na posição 0 "C" e termina na posição 5 "o" contando tambem os espaços
        // da pra usar ($site, -5,2)
        echo "$sub "; // Curso
        print(substr($site, 9, 5)); // imprimiria --> Vídeo
?>
    </div>
</body>
</html>