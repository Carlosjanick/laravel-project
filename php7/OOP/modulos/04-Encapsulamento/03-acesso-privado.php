<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once ('./vendor/autoload.php');
        use Classes\AcessoPrivado;

        /* Private -- mais seguro--tem responsabilidade total sobre os atributos nao consegui visualizar nem manipular atributos fora da classe...somente na propia classe */
        $carlos = new AcessoPrivado('Carlos', 'contato@us.edu.cv', 99888867568);

        echo '<pre>';
        var_dump($carlos);
        ?>
    </body>
</html>
