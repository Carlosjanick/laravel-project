<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Conceitos de Abstração</title>
    </head>
    <body>
        <?php
          require_once ('./vendor/autoload.php');
          use Classes\Abstracao;
          use Classes\AbstracaoCC;
          use Classes\AbstracaoCP;
          
//        $conta = new Abstracao("Carlos Pina", 500);
//        $conta2 = new Abstracao("Marcos", 500);
//        
//        $conta->Depositar(1000);
//        $conta->Retirar(500);
//        $conta->Transferir(500, $conta2);
//        echo "<pre>";
//        var_dump($conta);
        
        $cc = new AbstracaoCC('Carlos', 0, 1000);
        $cp = new AbstracaoCP("Carlos", 0);
        
        $cc->Depositar(1000);
        $cc->Retirar(500);
        $cc->Transferir(200, $cp);
        
        $cp->Depositar(500);
        $cp->Retirar(200);
        $cp->Transferir(100, $cc);
        
        $cp->verSaldo();
        $cc->verSaldo();
        
        echo "<pre>";
        var_dump($cc,$cp);
        ?>
    </body>
</html>
