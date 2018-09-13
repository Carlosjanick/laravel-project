<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once ('./vendor/autoload.php');
         use Classes\ResolucaoDeEscopo;
         use Classes\ResolucaoDeEscopoDigital;

         //atributos estaticos e operador de resoluçao de escopo
         //propriedade static ela nao vai poder ser acessada pelo objecto
         //é um membro apenas da classe
         
         $Produto  = new ResolucaoDeEscopo("Livro PHP", 100);
         $Digital = new ResolucaoDeEscopoDigital("Livro PHP", 50);
         
         $Produto->Vender();
         $Produto->Vender();
         $Produto->Vender();
         
         $Digital->Vender();
         $Digital->Vender();
         //$Produto->Relatorio();//simplesmente executando o metodo static nao interagindo com ele
         //operador de resoluçao de escopo
         ResolucaoDeEscopo::Relatorio();
         
        
         //quantidade livro digital
         echo ResolucaoDeEscopoDigital::$Digital ." Livros digitais <br>";
         //quantidade impressos
         echo ResolucaoDeEscopo::$Vendas - ResolucaoDeEscopoDigital::$Digital." Livros impressos<br>";
         
         //echo "<pre>";
         //var_dump($Produto,$Digital);
        ?>
    </body>
</html>
