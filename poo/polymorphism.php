<?php

abstract class Animal{

    public function Say(){
        return "Sound"."<br>";
    }

    public function toMove(){
        return "Walk"."<br>";
    }
}

class Dog extends Animal{

    public function Say(){
        return "Bark"."<br>";
    }
}

class Cat extends Animal{
    public function Say(){
        return "Meow"."<br>";
    }
}

class Bird extends Animal{
    public function Say(){
        return "Sing"."<br>";
    }

    public function toMove(){
        return "Fly"." and ".parent::toMove();//o THIS se refere ao próprio objeto e PARENT se refere a classe pai.
    }
}

echo "<br>----------------------------------- Dog<br>";
$bolinha = new Dog();
echo $bolinha->Say();
echo $bolinha->toMove();

echo "<br>----------------------------------- Cat<br>";
$mel = new Cat();
echo $mel->Say();
echo $mel->toMove();

echo "<br>----------------------------------- Bird<br>";
$pintassilgo = new Bird();
echo $pintassilgo->Say();
echo $pintassilgo->toMove();

?>