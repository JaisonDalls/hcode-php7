<?php

//Classe é um conjunto de atributos e métodos.
class CreateClass {//por convenção tem que começar com letra maiúscula.

    public $name;//atributo

    public function fala(){//método
       return $this->name." falando!";
    }


}

$individuo = new CreateClass();
$individuo->name = "Jaison";//popula o atributo com o valor "Jaison".
echo $individuo->fala();//chama o método falar da classe CreateClass.

?>