<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP Polimorfismo</title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        use Classes\Polimorfismo;
        use Classes\PolimorfismoDeposito;
        use Classes\PolimorfismoCartao;

        $boleto = new Polimorfismo('Pro PHP', "334.00");
        $boleto->Pagar();
        echo "<hr>";
        
        echo "<pre>";
        var_dump($boleto);
        echo "</pre>";
        echo "<hr>";

        $deposito = new PolimorfismoDeposito("Pro PHP", "334.00");
        $deposito->Pagar();
        echo "<hr>";

        echo "<pre>";
        var_dump($deposito);
        echo "</pre>";
        echo "<hr>";

        $cartao = new PolimorfismoCartao("Pro PHP", "334.90");
        $cartao->Pagar(12);
        
        echo "<pre>";
        var_dump($cartao);
        echo "</pre>";
        echo "<hr>";

        ?>
    </body>
</html