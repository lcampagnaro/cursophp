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
            $nome = $_REQUEST["nome"] ?? "nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "sobrenome";
            $idade = $_REQUEST["idade"] ?? "??";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>. Vi que você tem $idade anos!</p>";
        ?>
        <br>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> <!--Nesse, o javascript é quem chama o "arquivo" de index, como página em branco-->

        <!--<button onclick="javascript:histoy.go(-1)">&#x2B05; Voltar</button>-->  <!--Nesse caso, usa o histórico para voltar para a página anterior. O Arquivo permanece com as informações preenchidas anteriormente-->
    </main>    
</body>
</html>