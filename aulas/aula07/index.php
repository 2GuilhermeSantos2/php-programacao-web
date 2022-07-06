<?php 

/*
String = Palavras (Tudo entre aspas duplas ou simples é string)

Integer = Números inteiros (Podem ser somados, subtraidos, dividos e multiplicado)

Float = Números decimais

Boolean = Verdadeiro ou falso (true or false)

Array = Matriz (Seria uma espécie de "lista")

Object = Objeto ( -> indica algum item que estar no objeto )

Null = Nulo (Uma que não possui valor)

var_dump = Mostra o tipo da várivel e seu valor, se for string mostra o tamanho dela.


*/

//String
$nome = "<h1>Guilherme</h1>";

//Integer
$num_i = 345;
$nume_i2 = 100;
$int_r = $num_i + $nume_i2;

//Float

$decimal = 3.14;
//var_dump($decimal);

//Bolean

$verdadeiro = false;

//var_dump($verdadeiro);

//Array (Matrizes)

$carros = array("Fusca", "Brasilia", "Chevette", 2022);

//var_dump($carros)

//Object

class carro { // Criando uma classe
  public $cor; // Criando uma classe
  public $modelo; // Criando uma classe
  public function __construct($cor,$modelo) { //Função de construção
      $this->cor = $cor; //Função de construção
      $this->modelo = $modelo; //Função de construção
  }
  public function mensagem(){ //Criando a função mensagem 
    return "O carro é $this->cor e o modelo é $this->modelo";//retornando o carro e modelo
  }
}

$carro1 = new carro("Branco", "Fusca");


echo $carro1->cor;

//Null
$x = null;
var_dump($x)

/*Saber o tipo da váriavel
var_dump($int_r);
  var_dump($nome);
*/


?>