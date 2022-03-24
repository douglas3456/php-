<?php

//variaveis
$mediaEscola=6.5;
$mediaaluno=2;

//teste lógico
if ($mediaaluno >= $mediaEscola) {
    $retorno="Aprovado";
} else {
    $retorno="Reprovado";
}
//retorno
echo $retorno;

?>