<?php
echo "<h2>FUNÇÕES DE STRINGS</h2>";

echo "<h4> - EXPLODE - quebra uma string a partir do delimitador convertendo num array de strings</h4>";
$explodeString = "explode tudo agora - Divide uma string em strings - Agora tambem sera quebrado ";
$delimiter = "-";// Delimitador em que será identificado para quebrar a String.
$string = $explodeString; // String que sofrerá a ação.
$limit = 2;// Informa em quantos pedaços será quebrada a String. Pode ser um limite positivo ou negativo.
$resultExplode =  explode($delimiter,$string, $limit);
print_r($resultExplode);


echo "<h4> - IMPLODE ou JOIN - junta todos os elementos de um array de strings num único elemento</h4>";
$implodeArray = array('beterraba','machucho','aipim');
$resultImplode = implode(",",$implodeArray);
echo $resultImplode;//retorna uma String.

echo "<h4> - LCFIRST - Torna minúsculo o primeiro caractere de uma string</h4>";
$lcfirstString = lcfirst("VAMOS VER A PRIMEIRA LETRA DA STRING EM MINÚSCULO.");
echo $lcfirstString;


echo "<h4> - LOCALECONV - Retorna uma matriz associativa contendo informação de formatação numérica.</h4>";
setlocale(LC_ALL, "pt-BR");

$locale_info01 = localeconv();

echo "<pre>\n";
echo "--------------------------------------------\n";
echo "  Monetary information for current locale:  \n";
echo "--------------------------------------------\n\n";

echo "int_curr_symbol:   {$locale_info01["int_curr_symbol"]}\n";
echo "currency_symbol:   {$locale_info01["currency_symbol"]}\n";
echo "mon_decimal_point: {$locale_info01["mon_decimal_point"]}\n";
echo "mon_thousands_sep: {$locale_info01["mon_thousands_sep"]}\n";
echo "positive_sign:     {$locale_info01["positive_sign"]}\n";
echo "negative_sign:     {$locale_info01["negative_sign"]}\n";
echo "int_frac_digits:   {$locale_info01["int_frac_digits"]}\n";
echo "frac_digits:       {$locale_info01["frac_digits"]}\n";
echo "p_cs_precedes:     {$locale_info01["p_cs_precedes"]}\n";
echo "p_sep_by_space:    {$locale_info01["p_sep_by_space"]}\n";
echo "n_cs_precedes:     {$locale_info01["n_cs_precedes"]}\n";
echo "n_sep_by_space:    {$locale_info01["n_sep_by_space"]}\n";
echo "p_sign_posn:       {$locale_info01["p_sign_posn"]}\n";
echo "n_sign_posn:       {$locale_info01["n_sign_posn"]}\n";
echo "</pre>\n";

setlocale(LC_ALL, "en-US");

$locale_info = localeconv();

echo "<pre>\n";
echo "--------------------------------------------\n";
echo "  Monetary information for current locale:  \n";
echo "--------------------------------------------\n\n";

echo "int_curr_symbol:   {$locale_info["int_curr_symbol"]}\n";
echo "currency_symbol:   {$locale_info["currency_symbol"]}\n";
echo "mon_decimal_point: {$locale_info["mon_decimal_point"]}\n";
echo "mon_thousands_sep: {$locale_info["mon_thousands_sep"]}\n";
echo "positive_sign:     {$locale_info["positive_sign"]}\n";
echo "negative_sign:     {$locale_info["negative_sign"]}\n";
echo "int_frac_digits:   {$locale_info["int_frac_digits"]}\n";
echo "frac_digits:       {$locale_info["frac_digits"]}\n";
echo "p_cs_precedes:     {$locale_info["p_cs_precedes"]}\n";
echo "p_sep_by_space:    {$locale_info["p_sep_by_space"]}\n";
echo "n_cs_precedes:     {$locale_info["n_cs_precedes"]}\n";
echo "n_sep_by_space:    {$locale_info["n_sep_by_space"]}\n";
echo "p_sign_posn:       {$locale_info["p_sign_posn"]}\n";
echo "n_sign_posn:       {$locale_info["n_sign_posn"]}\n";
echo "</pre>\n";


echo "<h4> - LTRIM - Retira espaços em branco (ou outros caracteres) do início da string</h4>";
$ltrimString = " Antes tinha espeço no começo.";
$resultltrim = ltrim($ltrimString, " ");
echo $resultltrim;

echo "<h4> - RTRIM -  Retira espaço em branco (ou outros caracteres) do final da string</h4>";

echo "<h4> - NL2BR -  Insere quebras de linha HTML antes de todas newlines em uma string</h4>";

echo "<h4> - NUMBER_FORMAT -  Formata um número com os milhares agrupados</h4>";

setlocale(LC_ALL, "pt-BR");
$parametersLocale = localeconv();
$numberExample = 2400;
$numberExample = number_format($numberExample,$parametersLocale["int_frac_digits"],$parametersLocale["mon_decimal_point"],$parametersLocale["mon_thousands_sep"]);
echo $numberExample;

echo "<h4> - SETLOCALE -  Define informações locais</h4>";

echo "<h4> - STR_REPLACE -  Substitui todas as ocorrências da string de procura com a string de substituição</h4>";
$strreplaceString = "Quero que seja substituído todas as palavras merda que eu colocar nessa merda de frase.";
$alvo = "merda";
$trocarPor = "coisa";
$strreplaceString = str_replace($alvo,$trocarPor,$strreplaceString);
echo $strreplaceString;


echo "<h4> - STR_WORD_COUNT - Retorna informação sobre as palavras usadas em uma string</h4>";
$textBase = "Melhoras Felicidade Amor Problemas Monitoramento Amor Felicidade Melhorias Acessibilidade Muito Amor bom Melhorias Amor Monitoramento";
$result = str_word_count($textBase,1);
print_r($result);

echo "<h4> - STRLEN - Retorna o tamanho de uma string</h4>";
$textBase = "Melhoras Felicidade Amor Problemas Monitoramento Amor Felicidade Melhorias Acessibilidade Muito Amor bom Melhorias Amor Monitoramento";
echo strlen($textBase)." caracteres";

echo "<h4> - STRREV - Reverte uma string</h4>";
$textBase = "jaison rodrigo dallabrida";
echo strrev($textBase);

echo "<h4> - STRTOLOWER - Converte uma string para minúsculas.</h4>";
$textBase = "JAISON RODRIGO DALLABRIDA";
echo strtolower($textBase);

echo "<h4> - STRTOUPPER - Converte uma string para maiúsculas.</h4>";
$textBase = "jaison rodrigo dallabrida";
echo strtoupper($textBase);

echo "<h4> - TRIM - Retira espaço no início e final de uma string</h4>";
$textBase = "   jaison rodrigo dallabrida   ";
echo trim($textBase);

echo "<h4> - UCFIRST - Converte para maiúscula o primeiro caractere de uma string</h4>";
$textBase = "   jaison rodrigo dallabrida   ";
echo ucfirst(trim($textBase));

echo "<h4> - UCWORDS - Converte para maiúsculas o primeiro caractere de cada palavra</h4>";
$textBase = "   jaison rodrigo dallabrida   ";
echo ucwords(trim($textBase));

?>