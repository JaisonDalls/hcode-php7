<?php

interface Veiculo{
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
    public function acelerar($value)
    {   
        echo "Acelerando para ".$value." Km/h!<br>";
    }

    public function frear($value)
    {
        echo "Freando para ".$value." Km/h!<br>";
    }

    public function trocarMarcha($value)
    {
        echo "Atualmente na ".$value."º marcha!<br>";
    }
}

$carro = new Civic();
$carro->acelerar(345);
$carro->frear(320);
$carro->trocarMarcha(5);
?>