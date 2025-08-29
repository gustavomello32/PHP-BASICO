<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem Progressiva</title>
    <style>
        .contador {
            padding-right: 10px;
        }
    </style>
</head>
<body>
        <?php
            $n = 20;
             while ($n >= 0){
                echo "<span class = 'contador'>$n</span>";
                $n --;
            }
        ?>
</body>
</html>