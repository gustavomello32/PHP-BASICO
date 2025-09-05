<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "index2.php";
         // Comando permite que voce inclua outros arquivos
         // Tem o require , include once, require once

         //include --> incluir e executa o arquivo especificado

         //require -->Inclui e executa o arquivo espesificado diferente do include se o arquivo nao existir, PHP mostra um erro fatal

         //include_once -->Mesmo que include, mas so inclui o arquivo uma vez, mesmo se for chaado varias vezes -- evita inclusao duplicada

         //require_once --> Mesmo que require, mas so inclui o arquivo uma vez, mais segura para arquivos que precisam estar presentes e nao devem ser duplicados.
        echo "<h1>Testando novas funçoes</h1>";
        ola();
        mostravalor(4);
        echo "<h2>Finalizando o programa...</h2>"

?>
</body>
</html>