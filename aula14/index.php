<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimento que usa a passagem de parametros por referencia</title>
</head>
<body>
    <div>
        <?php
        function teste(&$x){
            $x += 2;
            echo "o valor de X e $x";
        }

        $a = 3;
        teste($a);
        echo "<p> o valor de A e $a";

?>
    </div>
</body>
</html>