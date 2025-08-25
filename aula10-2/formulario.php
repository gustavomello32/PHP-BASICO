<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com 5 campos</title>
</head>
<body>
    <div><form method="get" action="index.php">
    <?php
    $c = 1;
    while ($c <= 5) {
        echo "Valor $c: <input type = 'number' name = 'v$c' max='100' min='0' value='0'/><br/>";
        $c++;
    }
?>
        <input type="submit" value="Enviar" class="botao">

    </form>
    
    </div>
</body>
</html>