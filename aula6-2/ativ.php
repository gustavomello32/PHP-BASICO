<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $txt = isset($_GET["t"])? $_GET["t"]: "Texto Generio";
        $tam = isset($_GET["tam"])? $_GET["tam"]: "12pt";
        $cor = isset($_GET["cor"])? $_GET["cor"]: "#000000";

    ?>
    <style>
        span.texto {
            font-size:<?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        
        <?php
           echo "<span class='texto'>$txt</span>";
        ?>
    </div>  
    <a href="index.html">Voltar</a>
</body>
</html>