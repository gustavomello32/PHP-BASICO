<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma com function</title>
</head>
<body>
    <div>
        <?php
        $n1 = isset($_GET["n1"])? $_GET["n1"]: 0;
        $n2 = isset($_GET["n2"])? $_GET["n2"]: 0;

        function soma ($n1, $n2){
            $s = $n1 + $n2;
            echo "<p>A soma entre $n1 e $n2 é igual a: $s</p><br>";
        }
        soma($n1, $n2);
?>
    </div>
    <a href="formulario.php">Voltar</a>
</body>
</html>