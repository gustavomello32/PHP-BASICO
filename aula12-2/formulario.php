<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <div>
        <form method="get" action="index.php">
            <select name="num">
                <?php
                    for ($n = 1; $n <=10; $n ++){
                        echo "<option>$n</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada">
        </form>
    </div>
</body>
</html>