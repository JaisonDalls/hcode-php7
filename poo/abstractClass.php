<?php
//Nas classes abstratas além de definir os métodos necessários, é implementado o que ele fazem.
//Na diferença de classe abstrata com a comum, é que na abstrata nunca será possível instanciar um objeto de uma classe abstrata.
//para isso deve ser criado uma segunda classe e ela estender a classe abstrata, neste caso, é possível estanciar um objeto.
interface Veiculo{
    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

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

class Fusca extends Automovel{
    
    public function empurrar(){

    }
}

$carro= new Fusca();



?>