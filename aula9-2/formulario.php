<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana</title>
    <!-- Ler o dia da semana (2('segunda')- 7('domingo')) e mostrar se precisa ou não ir pra escola -->
</head>
<body>
    <div>
        <form action="index.php">
        Dia da semana: <input type="number" name="ds" min = "2" max = "8" required>
        <!-- min = "2" max = "8" -- Faz com que apenas de pra colocar um numero igual ou entre 2 e 8 no campo de dia da semana

        required -- Ele faz com que o campo seja obrigatório no navegador antes de enviar o formulário
        
        -->
        <input type="submit" class="botao" value="analisar">
        </form>
    </div>
</body>
</html>