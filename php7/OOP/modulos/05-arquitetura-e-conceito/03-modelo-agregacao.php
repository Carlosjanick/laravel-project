<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        
        use Classes\AssociacaoCliente; 
        use Classes\AgregacaoProduto;
        use Classes\AgregacaoCarrinho;
        /* determinar de qual classe o o objecto deve ser informado */

        $carlos = new AssociacaoCliente("Carlos", "cp121219@us.edu.cv");

        $prophp = new AgregacaoProduto('20', 'Pro PHP', 334.90);
        $wsphp  = new AgregacaoProduto('21', 'WS PHP', 289.90);
        $wshtml = new AgregacaoProduto('22', 'WS HTML5', 289.90);
        
        $outroProduto = new stdClass();
        $outroProduto->Produto = '23';
        $outroProduto->Nome = 'Curso de Jquery';
        $outroProduto->Valor = '400';
        
        $carinho = new AgregacaoCarrinho($carlos);
        $carinho->Add($prophp);
        $carinho->Add($wshtml);
        $carinho->Add($wsphp);
        
        $carinho->Remove($wshtml);
        //$carinho->Add($outroProduto);
        
        echo '<pre>';
        var_dump($carinho);
        
        
        echo '<hr>';
        echo '<pre>';
        var_dump($carlos, $prophp, $outroProduto);
        ?>
    </body>
</html>
