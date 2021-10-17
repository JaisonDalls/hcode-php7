<?php

class StaticMethods 
{

    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        if(StaticMethods::validateCpf($numero) === true)
        {
            $this->numero = $numero;
        }else{
           throw new Exception("Este CPF não é válido!", 1);
           
        }
    }

    public static function validateCpf($cpf): bool
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
/*
$teste = new StaticMethods();
$teste->setNumero("222.222.222-22");
echo $teste->getNumero();
*/

if(StaticMethods::validateCpf("465.784.134-89"))
{
    echo "CPF válido";
}else
{
    echo "Seu CPF não é válido!";
}


?>