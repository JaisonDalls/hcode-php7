<?php

function marketSum(float ...$productsValues){// com o  uso do reticência a função recebe parâmetros infinitos.
    return array_sum($productsValues);
}

echo "Total de suas compras: R$ ".number_format((marketSum(12.40,3.45,1.23,15.78,9.78,0.45,0.36,86.32,36.12,12.66,18.97,8.67)),2,",",",");


?>