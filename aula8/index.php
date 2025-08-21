<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Final</title>
    <style>
        .texto {
            color: darkred;
            font-weight: bolder;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div>
        <?php 
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;

        if ($media == 10){
            $sit = "O aluno brocou";
        }
        elseif ($media >= 7) {
            $sit = "o aluno foi: APROVADO"; 
        }
        else {
            $sit = " o aluno foi: <span class = 'texto'>REPROVADO</span>";
        }
         echo "A media do aluno entre <span class = 'texto'>$nota1</span> e <span class = 'texto'>$nota2</span> foi: <span class = 'texto'>$media</span> <br>";
         echo "$sit";  
?>
    </div>
<a href="formulario.php">Voltar</a>  
</body>
</html>