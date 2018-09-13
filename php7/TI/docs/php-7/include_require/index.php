<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Meu Site em PHP</title>
    </head>
    <body>    <!--require_once -> inclue o arquivo uma unica vez, garante que o arquivo deve estar presente para o sistema funcionar-->
              <!--include_once -> inclue o arquivo uma unica vez --continuando a execução se nao incluir -->
        <?php
            // include ('includes/header.php');
            // require ('includes/header.php');
            require_once ('includes/header.php');
        ?>
        
        <div>
            <?php
                echo 'Sou o conteúdo do site';
            ?>
        </div>

        <?php
            include_once ('includes/footer.php')
        ?>
        
    </body>
</html>