<?php
//Funções functions() 

/*Funções são blocos de códigos já pré-programados, para executar algo em um determinado momento, que
eu fizer a chamada da função.*/
/*
function Mensagem($nome){
    echo "Olá tudo bom $nome ?<br>";
}

//Call chamar a função
mensagem("Guilherme");
Mensagem("Ana")
*/
/*
function soma($valor1, $valor2){
    echo $valor1 + $valor2 . "<br>";
}

soma(10,50);
*/
/*
function soma(int $valor1, int $valor2){
    return $valor1 + $valor2 . "<br>";
}

echo soma(10,90)
*/

function fazerCafe($tipo = "cappuccino"){
    return "Fazendo uma xícara de: $tipo <br>";
}

echo fazerCafe("Expreso");
echo fazerCafe();
echo fazerCafe(null);
?>