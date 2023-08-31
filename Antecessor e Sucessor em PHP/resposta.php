<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>!";
                echo "<br>O seu <em>antecessor</em> é <strong>$a</strong>!";
                echo "<br>O seu <em>sucessor</em> é <strong>$s</strong>!";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button> <!--Nesse, o javascript é quem chama o "arquivo" de index, como página em branco-->

        <!--<button onclick="javascript:histoy.go(-1)">&#x2B05; Voltar</button>-->  <!--Nesse caso, usa o histórico para voltar para a página anterior. O Arquivo permanece com as informações preenchidas anteriormente-->
    </main>
    
</body>
</html>