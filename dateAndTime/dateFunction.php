<?php
//Função date() básica, passando o formato que se deseja mostrar em tela e timestamp
echo date("d/m/Y H:i:s",1633917040)."<br>";
echo time()."<br>";//quantidade de segundos desde 01/01/1970

//esta data 01/01/1970 é dado pelo uso do sistema UNIX(posix), como o php é baseado na linguagem C, e por extensão ao 
//ambiente UNIX, por isso é usado como base para a data e hora.

//===================================================================================================

$str = strtotime("1988-11-08");
echo date("d/m/Y - l - F",$str)."<br>";

// exemplo para calcular o prazo de entrega de uma mercadoria
$dayBuy = date("d/m/Y",strtotime("now"))."<br>";
$deliveryTime = date("d/m/Y",strtotime("+5 day"))."<br>";

echo "Data da compra: ".$dayBuy;
echo "Data prevista para entrega:".$deliveryTime;

?>