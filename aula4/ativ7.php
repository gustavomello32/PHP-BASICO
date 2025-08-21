<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situação</title>
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 +$nota2)/2;
        echo "A media entre $nota1 e $nota2 é: $m <br>";
        $f = ($m >= 7) ? "APROVADO" : "REPROVADO";
        echo "O aluno foi $f<br>";
        //OUTRA OPÇÃO
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 +$nota2)/2;
        echo "A media entre $nota1 e $nota2 é: $m <br>";
        echo "O aluno foi $f<br>". $f = (($m >= 7) ? "APROVADO" : "REPROVADO");

        //RESOLVER ISSO AMNH 2 APROVADO BUGADASSO

        //TENTEI RESOLVER E PROVAVELMENTE ESTA DESATUALIZADO ESSA FORMA DE CONCATENAR NO ECHO
?>    
</body>
</html>