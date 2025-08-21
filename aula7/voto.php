<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto</title>
    <style>
        a {
            text-decoration: none;
            
        }
    </style>
</head>
<body>
    <div>
        <?php
        $idade = $_GET["i"];

        if ($idade < 16){
            $tipovoto = "nao vota";
        }
        //estrutura simples
        else {
        if ($idade <18 && $idade >= 16) {
            $tipovoto = "voto opcional";
        }
        // estrutura aninhada
        else {
            $tipovoto = "voto obrigatório";
        }
        //estrutura aninhada
    }
    echo "o seu tipo de voto é: $tipovoto <br>";       
?>
<a href="formulariovoto.php">Voltar</a>
 </div>
</body>
</html>