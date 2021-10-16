<?php

function getArguments(){
    $args = func_get_args();
    return var_dump($args);
}

$retorno = getArguments("Jaison Dallabrida", 32, "08/11/1988", 3, "Flowti", "Matinhos", "Centro", "Rua Sergipe",1.74);


?>