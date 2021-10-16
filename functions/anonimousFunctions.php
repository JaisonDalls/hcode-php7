<?php

function test($callback){
    //Processo lento acontecendo
    $callback();
}

test(function(){//a função anônima é passada como parâmetro
    echo "terminou";
});


//================================================================================
//Exemplo 02

//Inserir a função numa vairiável

$fn = function($a){
    var_dump($a);
};

$fn("Jaison");


?>