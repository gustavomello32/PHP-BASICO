<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma com function e return</title>
</head>
<body>
    <div>
        <?php
        $n1 = isset($_GET["n1"])? $_GET["n1"]: 0;
        $n2 = isset($_GET["n2"])? $_GET["n2"]: 0;

        function soma($n1, $n2){
            return $n1 + $n2; // USADO QUANDO VOCE PRECISA USAR O VALOR RETORNADO EM OUTRO LUGAR(GUARDAR, COMPARAR, SOMAR DE NOVO)
        }
        $r = soma($n1, $n2);
        echo "A soma é $r"
?>
    </div>
    <a href="formulario.php">Voltar</a>
</body>
</html>