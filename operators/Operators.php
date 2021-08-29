<?php
echo "<h3>Operadores do PHP - Seção 3 - nº 17</h3>";

echo "<h4>Operadores de atribuição ( = )</h4>";
echo '<code>
        $nome = "Jaison";
    </code>'."<br>";
    echo $nome = "Jaison";
    
echo "<h4>Operadores de atribuição compostos ( .= , += , -= , *= , /= , )</h4>";
echo '<code>
        echo $nome.= " - PHP developer";
    </code>'."<br>";
    echo $nome .= " PHP developer.";

echo "<h4>Operadores de concatenação ( . )</h4>";
echo '<code>
        echo $nome . " Dallabrida";
    </code>'."<br>";
    echo $nome . " Dallabrida";


echo "<h4>Operadores aritméticos ( + , - , * , / , % , ^ )</h4>";

echo "<h4>Operadores de comparação ( == , === (valor e tipo) , >= , <= , != , !== (valor e tipo) )</h4>";

echo "<h4>Operador de comparação spaceship (<=> (menor (1) igual (0) ou maior (-1)))</h4>";

echo "<h4>Operador de comparação null-coalescing ( ?? )</h4>";
echo '<prev><code> $a = NULL;
       $b = NULL;
       $c = 10;
       
       echo $a ?? $b ?? $c;</code></prev>'."<br><br>";
    $a = NULL;
    $b = NULL;
    $c = 10;
    
    echo $a ?? $b ?? $c;

echo "<h4>Operador de incremento e decremento ( ++ , -- )</h4>";
$a = 20;
$a++;
--$a;

echo "<h4>Operador lógico ( && , || )</h4>";
?>