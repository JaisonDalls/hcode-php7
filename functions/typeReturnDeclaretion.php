<?php

    function setReturn(int ...$values): string {
        $value = array_sum($values);
        return $value;
    }
    var_dump(setReturn(2,4,45,6,7,78,12));
?>