<?php

namespace Client;

class Cadastro extends \Cadastro
{
    public function saleRegister()
    {
        $nameClient = $this->getName();
        echo "A sale to the client ".$nameClient." has been registered!";
    }
}

?>