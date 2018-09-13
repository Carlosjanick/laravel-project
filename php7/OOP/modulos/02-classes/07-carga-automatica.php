<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Carga automatica</title>
    </head>
    <body>
        <?php
            require_once('./vendor/autoload.php');
            use Classes\ClassesObjetos;
            use Classes\AtributosMetodos;
            use Classes\ComportamentoInicial;
            
            $classeA = new ClassesObjetos();
            $classeB = new AtributosMetodos();
            $classeC = new ComportamentoInicial("Carlos", 23, "Programador", 2000);
           // $classeD = new Teste();
        ?>
    </body>
</html>
