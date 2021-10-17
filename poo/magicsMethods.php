<?php

class MagicsMethods{

    private $logradouro;
    private $number;
    private $district;
    private $city;
    private $state;
    private $country;
    private $cep;

    function __construct($logradouro , $number, $district, $city, $state, $country, $cep)
    {
        $this->logradouro = $logradouro;
        $this->number     = $number;
        $this->district   = $district;
        $this->city       = $city;
        $this->state      = $state;
        $this->country    = $country;
        $this->cep        = $cep;
    }

    /**
     * Get the value of logradouro
     */ 
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */ 
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

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

    /**
     * Get the value of district
     */ 
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the value of district
     *
     * @return  self
     */ 
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of country
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */ 
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    
    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }
    
    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;
        
        return $this;
    }

    public function __toString()
    {
        return "Segue endereço do cliente: <br>".$this->logradouro.", ".$this->number." - ".$this->district." - ".$this->state." - ".$this->cep.".";
    }       
}
    
$logradouro = "Rua Sergipe";
$number = "194";
$district = "Centro";
$city = "Matinhos";
$state = "Paraná";
$country = "Brasil";
$cep = "83260-000";
$newAddress = new MagicsMethods($logradouro,$number ,$district ,$city ,$state ,$country,$cep);

echo $newAddress;
?>