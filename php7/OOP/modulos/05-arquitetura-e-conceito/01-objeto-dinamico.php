<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        
        use Classes\ObjetoDinamico;

        $cliente = new ObjetoDinamico;
        
        //cria objeto dinamico
        $carlos = new stdClass();
        $carlos->Nome = 'Carlos';
        $carlos->Email = 'cp121219@us.edu.cv';
        
        $cliente->Novo($carlos);
        
        $marcos = clone($carlos);
        $marcos->Nome = 'Marcos';
        $marcos->Email = 'Banana';



        echo '<pre>';
        var_dump($cliente, $carlos, $marcos);
        ?>
    </body>
</html>
