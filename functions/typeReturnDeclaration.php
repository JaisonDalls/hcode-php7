<?php

    function setReturn(int ...$values): string { // nesta função daclara-se que o retorno vai ser uma string.
        $value = array_sum($values);
        return $value;
    }
    var_dump(setReturn(2,4,45,6,7,78,12));
?>