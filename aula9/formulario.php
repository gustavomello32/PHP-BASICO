<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações</title>
    <style>     
        .botao {
           background-color: blue; 
           color: white;
           margin: 10px;
        }
    </style>
</head>
<!-- Ler um numero e qual operação realizar: dobro, cubo ou raiz quadrada.-->
<body>
    <div>
        <form method="get" action="index.php">
        Numero : <input type="number" name="num"><br>
        <fieldset>  <legend>Operação</legend>
            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" id="cubo" value="2">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" id="raiz" value="3">
            <label for="raiz">Raiz Quadrada</label>
        </fieldset>
        <input type="submit" class="botao" value="Calcular">
        </form>
    </div>
</body>
</html>