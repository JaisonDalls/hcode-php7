<?php

class AttributesAndMethods{

    private $modelo;
    private $motor;
    private $ano;


    


    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of motor
     */ 
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of motor
     *
     * @return  self
     */ 
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get the value of ano
     */ 
    public function getAno():int
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$teste = new AttributesAndMethods();//instancia o objeto

//alimentando os atributos com informações
$teste->setModelo("Gol bola 2005");
$teste->setMotor("PHP 1200 cv");
$teste->setAno(2005);

//populando variáveis buscando as informações inseridas.
$modeloCarro = $teste->getModelo();
$motor = $teste->getMotor();
$ano = $teste->getAno();

//Saídas em tela

// echo "Sr. Jaison acaba de adiquir um veículo modelo ".$modeloCarro.", com o motor ".$motor." do ano ".$ano.", aqui na loja Florência."
var_dump($teste->exibir());




?>