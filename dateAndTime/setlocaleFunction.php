<?php

setlocale(LC_ALL,"pt_BR","pt_BR.utf-8", "portuguese");
$dayOfWeek = strftime("%A");
$month = strftime("%B");
$day = strftime("%d");
$year = strftime("%Y");

echo $day." de ".$month." de ".$year."."
?>