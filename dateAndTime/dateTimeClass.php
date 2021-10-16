<?php

$dateInfos = new DateTime();
$period = new DateInterval("P15D");//determina o intervalo de dias
echo $dateInfos->format("d/m/Y H:i:s")."<br>";
$dateInfos->add($period);
echo $dateInfos->format("d/m/Y H:i:s");

?>