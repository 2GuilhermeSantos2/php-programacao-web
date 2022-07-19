<?php
/* Arrays (Matrizes) */

/*$carros = array("Fusca","Uno","Gol");
$carros = ["Fusca","Uno","Gol", "Brazialia","Prisma"];
$quantidade = count($carros);
*/

//$carros[1] = "Ferrari"; //Aterando valor em uma array

//quantidade = count($carros);

//echo $carros[0];
//echo $quantidade; //mostra a quantidades de itens na váriavel 
/*
for ($i = 0; $i < $quantidade; $i++){
    echo $carros[$i];
    echo "<br>";
}
*/
//echo "A quantidade na matriz é: ".count($carros);
/*
foreach ($carros as $carro){
    echo $carro."<br>";
}
*/
//$idade = array("Guilherme" => "20", "Maria" => "66", "Jose" => "70");
/*
$idade["Guilherme"] = "Santos";

echo $idade["Guilherme"];
*/
/*
foreach ($idade as $chave => $valor){
    echo "O nome é $chave e a idade é $valor <br>";
} 
*/

//$carros = ["Fusca","Uno","Gol", "Brazialia","Prisma", "Gol", "Fusion"];
//rsort($carros);

$idades = array("Guilherme" => "20", "Maria" => "66", "Jose" => "70");

//ksort($idades);
//arsort()
//krsort()

foreach ($idades as $idade => $valor){
    echo $valor. "<br>";
}

?>