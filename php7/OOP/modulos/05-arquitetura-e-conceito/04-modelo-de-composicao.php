<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        
        use Classes\ComposicaoUsuario;

        $carlos = new ComposicaoUsuario('Carlos', 'cp121219@us.edu.cv');
        
        $carlos->RegistraEndereco('Praia', 'Santiago');
        
        echo "o email de {$carlos->getNome()} é {$carlos->getEmail()} <br>";
        echo "{$carlos->getNome()} mora em {$carlos->getEndereco()->getCidade()}/{$carlos->getEndereco()->getEstado()}";
        
        echo '<pre>';
        var_dump($carlos);
        ?>
    </body>
</html>
