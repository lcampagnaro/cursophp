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
            $nome = $_GET["nome"] ?? "nome";
            $sobrenome = $_GET["sobrenome" ?? "sobrenome"];
            $idade = $_GET["idade"] ?? ;
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>. Vi que você tem $idade anos!</p>";
        ?>
        <br>
        <p>
            <a href="javascript:history.go(-1)">Volte para a página anterior</a>
        </p>
    </main>    
</body>
</html>