<?php

require_once("config.php");
use Client\Cadastro;

$cad = new Cadastro();
$cad->setName("Jaison Rodrigo Dallabrida");
$cad->setEmail("jaisondalls@gmail.com");
$cad->setPassword("TeiKO.123*3384");
$cad->saleRegister();


?>