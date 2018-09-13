<?php
require_once ('./vendor/autoload.php');

use Classes\Heranca;
use Classes\HerancaJuridica;

$pessoa = new Heranca("Carlos", 23);
$pessoa->formar("Pro PHP");
$pessoa->formar("WS PHP");
$pessoa->envelhecer();
$pessoa->verPessoa();

var_dump($pessoa);

echo '<hr>';

$pessoaME = new HerancaJuridica("Andrade Pina", 34, "US");
$pessoaME->formar("HTML5");
$pessoaME->formar("Web design");
$pessoaME->envelhecer();
$pessoaME->verPessoa();

$pessoaME->Contratar("Bebeto");
$pessoaME->Contratar("Maria");
$pessoaME->verEmpresa();
var_dump($pessoaME);
