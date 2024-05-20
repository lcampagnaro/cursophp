<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustar Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $preco = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form>
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php
        $aumento = $preco * $reaj /100;
        $novo = $preco + $aumento;
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?=$preco?>, com <strong>R$ <?=$aumento?> de aumento</strong> vai passar a custar <strong>R$ <?=$novo?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor()
        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>