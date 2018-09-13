<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title>Interação de Objetos</title>
    </head>
    <body>
        <?php
            require_once('./vendor/autoload.php');
            use Classes\IC\InteracaoClasse;
            use Classes\IC\InteracaoObjeto;
            
            $carlos = new InteracaoClasse("Carlos", 23, "Programador", 1000);
            $marcos = new InteracaoClasse("Marcos", 28, "Gerente", 1000);
            
            $camara = new InteracaoObjeto("Camara Municipal de São Filipe");
            $camara->Contratar($carlos, "Web Marketing", 30000);
            $camara->Pagar();
            $camara->Promover("SEO", 12000);
            $camara->Pagar();
           // $camara->Demitir(40000);
            
            
            $camara->Contratar($marcos, 'Gerente', 100000);
            $camara->Pagar();
            $camara->Pagar();
            $camara->Promover("Administrador");
            
            $camara->Funcionario($carlos);
            $camara->Pagar();
            
            var_dump($carlos, $marcos, $camara);
        ?>
    </body>
</html>
