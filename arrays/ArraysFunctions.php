<?php
echo "<h2>FUNÇÕES DE ARRAYS</h2>";
echo "<h4> - ARRAY_PUSH - Adiciona um ou mais elementos no final de um array</h4>";
$itensMercado = array();
array_push($itensMercado,array
    (
        'Categoria'=>'Mercearia',
        'IdProduto'=>124177,
        'NomeProduto'=>'Achocolatado',
        'DescricaoProduto'=>'Chocolate em po',
        'PrecoProduto'=>'R$ 9,60',
        'Unidade'=>'Lata',
        'QuantidadeUnitaria'=>1
    )
);
array_push($itensMercado,array
    (
        'Categoria'=>'Frutas e Verduras',
        'IdProduto'=>23464,
        'NomeProduto'=>'Cebola',
        'DescricaoProduto'=>'cebola rocha da China',
        'PrecoProduto'=>'R$ 0,80',
        'Unidade'=>'Kg',
        'QuantidadeUnitaria'=>1000
    )
);
$result =  json_encode($itensMercado);// transforma array para JSON
$result02 = json_decode($result, true);//transforma JSOn em array. Passar segundo parâmetro True para não transformar em objeto os valores internos do array.
echo $result;
print_r($result02);

?>