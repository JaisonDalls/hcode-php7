<?php

function ola(): String{
    $mensagem =  "Estou dentro da Função ola()";
    return $mensagem;
}

echo ola()."<br>";

//============================================================= Função que recebe um valor e formata casas decimais e separador de milhar.
function formatDecimalNumber($val){   
    $formattedVal = "R$ ".number_format($val,2,",",".");
    return $formattedVal;
}

function calcMultiple(?float $val, ?float $qtd, String $operator){
    switch ($operator) {
        case '*':
           $total = $val * $qtd;
        break;
        case '+':
            $total = $val + $qtd;
        break;
        case '-':
            $total = $val - $qtd;
        break;
        case '/':
            $total = $val / $qtd;
        break;
        case '%':
            $total = $val % $qtd;
        break;
        default:
            $total = $val ^ $qtd;
        break;
    }
    return $total;
}

$monthlySalary = 2070.34;
$yearlyCalc = 12;
$investPercent = 0.2;

echo "Salário mensal: ".formatDecimalNumber($monthlySalary).".<br>";
echo "Salário anual: ".formatDecimalNumber(calcMultiple($monthlySalary,$yearlyCalc,"*")).".<br>";
echo "Investimento mensal: ".formatDecimalNumber(calcMultiple($monthlySalary,$investPercent,"*")).".<br>";
echo "Investimento anual: ".formatDecimalNumber(calcMultiple(calcMultiple($monthlySalary,$investPercent,"*"),$yearlyCalc,"*")).".<br>";

?>

