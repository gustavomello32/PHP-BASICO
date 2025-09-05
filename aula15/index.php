<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o printf</title>
</head>
<body>
    <div>
        <?php
            $p = "Leite";
            $pr = 4.5;
            echo "O $p custa  R$ " . number_format($pr, 2);

            printf ("O %s custa R$ %.2f", $p, $pr)
            // %s -- pra string
            // %f -- pra numero
            // %.2f -- 2 casas decimais
            // $p, $pr -- no final é onde voe passa os valores que vao preencher os espaços reservados no texto (%s e %.2f respectivamente)
?>
    </div>
</body>
</html>