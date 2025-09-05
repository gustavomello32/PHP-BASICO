<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma com multiplos parametros</title>
</head>
<body>
    <div>
        <?php
        function soma (){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0; $i <= $t; $i++){
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma (3,5,2);
        echo "A soma dos valores é $r"
?>
<!-- Quando utilizar func_get... e o outro?
        >> Nao sabe quantos valores o usuario vai informar
        >> Quer uma função mais flexivel e reutilizavel
        >> Está criando algo como uma calculadora, relatórios, ou funções matemáticas genéricas. 
-->
    </div>
</body>
</html>