<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form  method="get" action="02idade.php">
         Nome : <input type="text" name="nome"><br>
         Ano de Nascimento: <input type="number" name="ano"><br>
         <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem" value="mulher">
            <label for="fem">Feminino</label><br>
         </fieldset>   
         <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>