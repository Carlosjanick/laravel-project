<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Atributos e Metodos</title>
    </head>
    <body>
        <?php
            require_once ('./vendor/autoload.php');
            
            use Classes\AtributosMetodos;           
            
            $carlos = new AtributosMetodos();
            $carlos->setUsuario('Carlos J .Pina', 23, 'Desenvolvedor Web');
            
            $usuario = $carlos->getUsuario();
            echo $usuario;
           
           
            $carlos->getClasse();
           
            $carlos->Envelhecer();
           
            $carlos->getClasse();
           
            //$carlos->setIdade('bb');
          
        ?>
    </body>
</html>
