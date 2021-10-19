<?php


//public    -> todo mundo vê
//protected -> classe pai e classes extendidas.
//private   -> apenas a classe em que é criado o atributo.

class Encapsulation{

    public $name = "Jaison Dallabrida";
    protected $age = 32;
    private $password = "TeiKO.123*3384";

    public function showData(){

        echo "Classe chamada: ".get_class($this)."<br>";
        echo "name: ".$this->name."<br>";
        echo "age: ".$this->age."<br>";
        echo "password: ".$this->password."<br>";
    }

}

$example01 = new Encapsulation();
// echo $example01->name."<br>";
// echo $example01->age."<br>";
// echo $example01->password."<br>";
// $example01->showData();


class Programmer extends Encapsulation{
    public function showData(){

        echo "Classe chamada: ".get_class($this)."<br>";//usado para ver qual classe está sendo chamada pelo objeto.

        echo "name: ".$this->name."<br>";//herdou da classe Encapsulation, pois é público.
        echo "age: ".$this->age."<br>";//herdou da classe Encapsulation, mesmo que seja protegido.
        echo "password: ".$this->password."<br>";//Não herdou da classe Encapsulation, pois este atributo é privado.
    }   
}

$example02 = new Programmer();
$example02->showData();

?>