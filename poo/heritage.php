<?php

//Abstração -> o quanto a classe pe genérica ao ponto de ser usada em muitas classes extendidas.
class Documents{
    private $number;

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }
    
    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }
}


class Heritage extends Documents
{
    public static function validateCpf($cpf):bool
    {
        if(empty($cpf)) return false;
        
        //Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is','',$cpf);

        //Verifica se foi informado todos os dígitos corretamente
        if(strlen($cpf) != 11) return false;

        //Verifica se foi informada uma sequência de dígitos repetidos. Ex.: 111.111.111-11
        if(preg_match('/(\d)\1{10}/',$cpf)) 
        {
            return false;
        } else 
        {
            // Faz o calculo para validar o CPF
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
            return true;
        }
    }
}

$doc01 = new Heritage();
var_dump($doc01->validateCpf("055.029-06"));

?>