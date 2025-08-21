<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $an = isset($_GET["ano"])?$_GET["ano"]:1900;
    $idade = date("Y") - $an;
    
    if ($idade >= 18){ //isso é a estrutura condicional simples 
        $dirigir = true;
        $votar = true;
    }
    else {
        $dirigir = false;
        $votar = false;
    }
    echo "A pessoa tem $idade anos <br>";
    echo "A pessoa pode dirigir?" . ($dirigir?"Ja pode dar uns pião" : "Vai tomar multinha <br>");
    echo "<br>A pessoa pode votar?" . ($votar? "Ja pode votar" : "Não pode votar <br>");  
?>
<a href="formulario.php">Voltar</a>
</body>
</html>