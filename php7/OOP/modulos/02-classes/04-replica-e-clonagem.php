<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Replica e Clonagem</title>
    </head>
    <body>
        <?php
             require_once('./vendor/autoload.php');
             
             use Classes\ReplicaClonagem;
             
             $readA = new ReplicaClonagem("posts", "categoria = 'noticias'", "ORDER BY data DESC");
             
             
             $readB = clone($readA);
             $readB->setTermos("categoria = 'comentarios'");
             
             
             
             $readC = clone($readB);
             $readC->setTabela("videos");
             $readC->setTermos("tag = 'facebook'");
             
             
             $readA->ler();
             $readB->ler();
             $readC->ler();
             
             
             var_dump($readA, $readB, $readC);
        ?>
    </body>
</html>
