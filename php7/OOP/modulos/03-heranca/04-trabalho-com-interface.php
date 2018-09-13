<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>ws php - Trabalho com Interfaces</title>
    </head>
    <body>
        <?php
        require_once('./interfaces/IAluno.php');
        require_once ('./vendor/autoload.php');
        use Classes\TrabalhoComInterfaces;
        //use Interfaces\IAluno;
        
        $Aluno = new TrabalhoComInterfaces("Carlos", "PHP");
        $Aluno->Formar();
        $Aluno->Matricular("WS html5");
        $Aluno->Formar();
        
        
        echo "<pre>";
        var_dump($Aluno);
        ?>
    </body>
</html>
