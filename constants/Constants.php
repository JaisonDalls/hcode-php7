<?php
//modo tradicional
define("NOME_COMPLETO","Jaison Rodrigo Dallabrida");//constantes devem estar em letras maiúsculas.
$endereco = "Rua Sergipe, 141";

$returnText = "O Srº ".NOME_COMPLETO.", reside no seguinte endereço: $endereco .";

//echo $returnText;

//modo Array
define("DADOS_PESSOAIS", 
    [
        'nome'=>'Jaison',
        'sobrenome'=>'Dallabrida',
        'nomeCompleto'=>'Jaison Rodrigo Dallabrida',
        'sexo'=>'Masculino',
        'idade'=>32,
    ]
);

//echo json_encode(DADOS_PESSOAIS);

//constantes de ambiente 
 
echo "PHP_BINARY =>". PHP_BINARY."<br>";
echo "PHP_VERSION =>". PHP_VERSION."<br>";
echo "PHP_OS_FAMILY =>". PHP_OS_FAMILY."<br>";
echo "PHP_EXTENSION_DIR =>". PHP_EXTENSION_DIR."<br>";

echo "APACHE_MAP =>". APACHE_MAP."<br>";
echo "DIRECTORY_SEPARATOR =>". DIRECTORY_SEPARATOR."<br>";





?>