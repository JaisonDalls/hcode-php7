<?php
echo "===================================================================================================<br>";
echo "<h3>Tipos de variáveis - Seção 3 - nº 13</h3>";

$nomeDaVariavel = "Jaison"; //Tipo String

echo $nomeDaVariavel;//imprime na tela o conteúdo desejado.
var_dump($nomeDaVariavel);//imprime o path, tipo de variáve e tamanho.

echo "===================================================================================================<br>";
echo "<h3>Variáveis e Tipos de dados - Seção 3 - nº 14</h3>";

echo "<h5>VARIÁVEIS</h5>";

$bornYear = 1988;//Variável deve ser criada em CamelCase e são cases sensitive.
$firstName = "Jaison";
$middleName = "Rodrigo";
$lastName = "Dallabrida";
$bornCity = "Ituporanga";

$nome01 = "BordardFour";//números não devem ser escritos no início da variável

//Comentários de 01 linha.

/**Comentários de várias linhas
 * 
 * Pode ser colocado 
 *       em qualquer lugar 
 * até aqui.
*/

if(isset($anoNascimento)){//valida se a variável foi definida.
    echo "A variável <b>\$anoNascimento</b> está definida!";
}

//concatenação de variáveis.
$fullName = "O nome completo de ".$firstName.": $firstName $middleName $lastName.";
echo $fullName;

echo "<h5>TIPOS DE DADOS</h5>";

var_dump($name = "Adare Systems");//uso das aspas duplas                    tipo básico String
var_dump($site = 'www.adaresystems.com.br');//uso das aspas simples         tipo básico String
var_dump($year = 2021);//                                                   tipo básico Int
var_dump($salary = 5500.50);//                                              tipo básico Float
var_dump($liberate = true);//                                               tipo básico Boolean
var_dump($fruits = array("abacaxi","manga","laranja"));//                   tipo composto Array
var_dump($bornDate = new DateTime());//                                     tipo composto Objeto
//var_dump($file = fopen("arquivoTesteFopen.php","w+", false));//           tipo especial recurso    
var_dump($nulo = NULL);//                                                   tipo especial Null obs.: ausência de valor.    


echo "===================================================================================================<br>";
echo "<h3>Variáveis pré-definidas ou super globais - Seção 3 - nº 15</h3>";

/**
 * Várias variáveis pré-definidas no PHP são "superglobais", que significa que elas estão 
 * disponível em todos escopos para todo o script. Não há necessidade de fazer global $variable; 
 * para acessá-lo dentro de funções ou métodos. * 
 * 
*/
echo "<h5>\$GLOBALS</h5>";

function testContent(){
    $conteudo = " Fernando Osório";
    echo 'Aqui pega o conteúdo da variável <b>$conteudo</b> que está <e>FORA</e> da função - Global:' .$GLOBALS["conteudo"]."<br>";
    echo 'Aqui pega o conteúdo da variável <b>$conteudo</b> que está <e>DENTRO</e> da função: '.$conteudo."<br>";
}

$conteudo = " Jaison Dallabrida";
testContent();

echo "<h5>\$_SERVER</h5>";

$infosServer = $_SERVER;
echo json_encode($infosServer)."<br><br>";//Retorna um Array de informações originalmente, mas com json_encode muda para JSON.
echo "Nome do servidor local: ".$_SERVER['SERVER_NAME']."<br>";
echo "Porta: ".$_SERVER['HTTP_HOST']."<br>";
echo "Idioma local: ".$_SERVER['HTTP_ACCEPT_LANGUAGE']."<br>";
echo "Hora da requisição: ".$_SERVER['REQUEST_TIME']."<br>";
echo "Método da requisição: ".$_SERVER['REQUEST_METHOD']."<br>";

echo "<h5>\$_GET</h5>";

//pode ser usado para pegar algum parâmetro exposto na URL por exemplo.
echo "URL de exemplo => http://localhost:8000/variables.php?name=Jaison&sobrenome=Dallabrida";
var_dump($_GET);
var_export($_GET);//Pode ser usado também para imprimir conteúdo de um array.
echo "<br><br>";
print_r($_GET);//Pode ser usado também para imprimir conteúdo de um array.

//usando cast para alterar o tipo da variável.
var_dump((int)$_GET['age']);// de String para Int.


echo "<h5>\$_SESSION</h5>";
//session_start();
$value = 13216516316;
$_SESSION['primeira']=$value;
echo $_SESSION['primeira'];

echo "<br><br>===================================================================================================<br>";
echo "<h3>Escopo de variáveis - Seção 3 - nº 16</h3>";

$nomeGlobal = "Jaison Dallabrida";

function escreveNome(){
    global $nomeGlobal;
    echo  $nomeGlobal = "Felipe de Souza"."<br>";
}
escreveNome();
echo $nomeGlobal;



?>