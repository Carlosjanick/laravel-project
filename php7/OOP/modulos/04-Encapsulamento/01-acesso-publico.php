<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        use Classes\AcessoPublico;
        
        $carlos = new AcessoPublico('Carlos', 'cp121219@us.edu.cv');
        
        
        $carlos->Nome = "Mozer";
       
        //$carlos->Email = 'Banana';
        
        echo '<pre>';
        var_dump($carlos);
        ?>
    </body>
</html>
