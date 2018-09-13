<?php

$name = 'EspecializaTi - Cursos Online de TI';

echo strtoupper($name);  # --  pega e transforma para maiuscula
echo '<hr>';
echo strtolower($name);  # --  pega e transforma para minuscula
echo '<hr>';
echo ucfirst(strtolower($name)); # --  pega e transforma para maiuscula o primeiro caractere da primeira palavra
echo '<hr>';
echo ucwords(strtolower($name));  # --  pega e transforma a primeira letra de cada palavra para maiuscula