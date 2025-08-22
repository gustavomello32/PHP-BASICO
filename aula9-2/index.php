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
    <?php
    $d = isset($_GET["ds"])? $_GET["ds"]: 0;
    switch ($d){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar";
            break;
        case 7:
        case 8:
            echo "Descanse, pequeno gafanhoto!";
            break;
        default:
            echo "Dia da semana invalido"; 
}        
?>
    </div>
    <a href="formulario.php">Voltar</a>
</body>
</html>