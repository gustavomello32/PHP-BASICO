<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Personalizado</title>
    <style>
        * {
            margin: 10px;
        }
    </style>
</head>
<body>
    <div>
        <form method="get" action="index.php">
        Inicio:<input type="number" name="v1"> 
        Final:<input type="number" name="v2">
        Incremento: <input type="number" name="v3" min= "1" max = "8" required >   
        <input type="submit" value="Contar">
        </form>
    </div>
</body>
</html>