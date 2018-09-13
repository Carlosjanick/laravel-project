<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Modelo de Associação</title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        
        use Classes\AssociacaoCliente;
        use Classes\AssociacaoLogin;
        
        $carlos = new AssociacaoCliente("Carlos", "cp121219@us.edu.cv");
        
        
        
        $login = new AssociacaoLogin($carlos);
        
        if($login->getLogin()):
            echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
            echo "{$login->getCliente()->getNome()} LOGOU COM SUCESSO USANDO O EMAIL: {$login->getCliente()->getEmail()} <hr>";
        else:
            echo 'Erro ao fazer login';
        endif;
        
        echo '<pre>';
        var_dump($carlos, $login);
        
        ?>
    </body>
</html>
