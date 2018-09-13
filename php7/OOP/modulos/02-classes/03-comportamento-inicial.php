<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Comportamento inicial</title>
    </head>
    <body>
        <?php
            require_once('./vendor/autoload.php');
            
            use Classes\ComportamentoInicial;
            
            $carlos = new ComportamentoInicial('Carlos Pina', 23, 'Design', 96000);
            $marcos = new ComportamentoInicial('Marcos', 20, 'Web desig', 100000);
            $ana = new ComportamentoInicial('Ana', 32, 'Marketing', 67000);
            
            
            
            $carlos->ver();
        ?>
    </body>
</html>
