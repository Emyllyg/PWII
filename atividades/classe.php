<?php

class Fruta {
    public $name;
    public $color;
    public $sabor;

    function set_name($name) { //definir
        $this->name = $name;
    }

    function get_name() {      //pegar
        return $this->name;
    }
    
    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }

    function set_sabor($sabor) {
        $this->sabor = $sabor;
    }

    function get_sabor() {
        return $this->sabor;
    }
} 


echo "<h2>Atividade POO:</h2>";

$maca = new Fruta();
$banana = new Fruta();
$maca->set_name ('Maçã');
$banana->set_name ('Banana');

echo $maca -> get_name();
echo "<br>";
echo $banana ->get_name();

echo "<br>";
echo "<br>";

$maca->set_name('Maçã');
$maca->set_color('Vermelho');

echo "Nome: " .$maca->get_name();
echo "<br>";
echo "Cor: " .$maca->get_color();

echo "<br>";
echo "<br>";

$banana->set_name('Banana');
$banana->set_color('Amarelo');

echo "Nome: " .$banana->get_name();
echo "<br>";
echo "Cor: " .$banana->get_color();


echo "<br>";
echo "<br>";

$sabor = new Fruta();
$sabor->set_sabor('Sabor');
echo $sabor -> get_sabor();
echo "<br>";
echo "<br>";




?>