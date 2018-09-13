<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lançamento de excessoes!</title>
    </head>
    <body>
        <?php
            require_once ('./vendor/autoload.php');
        
            use App\Config;
            
            $eu = null;

            if (!$eu):
                $a = new Exception("Eu é NULL", E_USER_NOTICE);
            endif; 

            echo $a->getMessage();
            var_dump($a);
            echo '<hr>';


            try{
                throw new Exception("Eu é NULL", E_USER_NOTICE);
            }catch(Exception $e){
                echo "<p>Erro #{$e->getCode()}: {$e->getMessage()} <br>";
                echo "<small>{$e->getFile()} na linha {$e->getLine()}</small></p>";

                //echo "<hr>";
                //echo $e->xdebug_message;
            }
        ?>
    </body>
</html>
