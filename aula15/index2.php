<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o print_r</title>
</head>
<body>
<!--
    print_r() serve para exibir o conteudo completo de arrays ou objetos de forma legivel

    Muito util para debug(ver o que tem dentro de um array)
-->
    <?php
    $x[0]=4;
    $x[1]=8;
    $x[2]=3;
    print_r($x); // --> pode ser subistituida por var_dump($x); e var_export($x);

    // cria o array $x manualmente:


    $x2 = array (3,7,6,2,1,9);
    print_r($x2); // --> pode ser subistituida por var_dump($x); e var_export($x);
    
    // cria o array $x2 com array():
    //forma mais compacta e comum de criar um array com indices automaticos(0, 1, 2,...)
?>
</body>
</html>