<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(phpversion() >= 7):
                echo phpversion() .' Olá Mundo pode Programar';
           else:
                echo phpversion() .' Olá Mundo Atualize o PHP';
            endif;
            
            echo '<hr>';
            
            //echo phpinfo();
            
            //echo  '<pre>';
            //print_r(ini_get_all());
            //echo '</pre>';
            
            echo ini_get('date.timezone');
        ?>
    </body>
</html>
