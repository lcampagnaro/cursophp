<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação BCB API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url),true);
            
            //var_dump($dados);
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            echo "A cotação do Dólar é de $cotacao";
            
            $real = $_REQUEST["din"] ?? 0;

            $dolar = $real / $cotacao;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ".numfmt_format_currency($padrao, $real, "BRL") . " equivalem à <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <br>
        <br>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>

    </main>
    
</body>
</html>