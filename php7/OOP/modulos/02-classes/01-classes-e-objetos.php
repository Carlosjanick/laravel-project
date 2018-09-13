<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Classe e Objeto</title>
    </head>
    <body>
        <?php
            require_once('./vendor/autoload.php');
            
            use Classes\ClassesObjetos;
            
            $teste = new ClassesObjetos();
            $teste->getClass(" De introdução", " Mostrar uma classe");
            
            $teste->verClass();
            
            $teste->Classe = 'Classe 2';
            $teste->Funcao = 'Ver os atributos';
            
            $teste->verClass();
        ?>
    </body>
</html>
