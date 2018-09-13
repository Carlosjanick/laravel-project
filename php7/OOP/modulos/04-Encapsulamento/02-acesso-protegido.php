<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        use Classes\AcessoProtegido;
        use Classes\AcessoProtegidoFilha;

        $maria = new AcessoProtegido("Maria", "maria@hotmail.com");
        $maria->Nome = 'Maria Santos';

        
        /*acesso preotect nao pode ser acessado pelos objectos para poder modificar e obrigado a ter um metodo publico
         -nao se da aos objectos mas sim as filhas dos objectos*/
        //$maria->Email = 'Banana';
        //$maria->setNome('pablo');//metodo protegido
        
        echo '<hr>';
        
        $pablo = new AcessoProtegidoFilha("Pablo", 'cp121219@us.edu.cb');
        //$pablo->setNome('paulo');
        
        $pablo->AddCpf('Carlos', '09876554545445');
        echo '<pre>';
        var_dump($maria,$pablo);
        ?>
    </body>
</html>
