<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Modelagem de Classe</title>
    </head>
    <body>
        <?php
                
                require_once('./vendor/autoload.php');
                use Classes\ModelagemDeClasse;
                
                $Carlos = new ModelagemDeClasse('Carlos Pina', 23, 'Programador', 120000);
                $Carlos->setProfisao('Web Master');
                
                $Carlos->Trabalhar("um portal", 90000);
                
                
                var_dump($Carlos);
        ?>
    </body>
</html>
