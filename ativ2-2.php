<?php

//entrada
$numero=28;



if ($numero>0) {
    $retorno="neutro";

 } elseif($numero>0){
$retorno="positivo";

} else {
    $retorno="negativo";
}
//retorno
echo $numero.'é'.$retorno;

?>