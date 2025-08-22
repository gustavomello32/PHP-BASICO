<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
    <style>
        .foco {
            font-weight: bolder;
        }
        .botao {
            border: 1px solid black;
            background-color: blue;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<!-- Ler um numero e qual operação realizar: dobro, cubo ou raiz quadrada.-->
<body>
    <div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"]: 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;
        switch ($o) {
            case 1:
                $r = $n * 2;
                break ;
            case 2:
                $r = pow($n, 3); // ou da pra fazer assim: $n2 ** 3;
                break ;
            case 3:
                $r = sqrt($n);
        }
        echo "O resultado da operação solicitada foi <span class = 'foco'>$r</span> <br>";
    ?>
    <a href="formulario.php" class="botao">Voltar</a>
    </div>
</body>
</html>