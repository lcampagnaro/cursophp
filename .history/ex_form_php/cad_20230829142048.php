<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultados do processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST);
            $nome = $_REQUEST("nome");
            $sobrenome = $_REQUEST("sobrenome")
            $idade = $_REQUEST("idade")
            echo "<p>É um prazer te conhecer, $nome $sobrenome. Vi que você tem </p>"
        ?>
    </main>


    
</body>
</html>