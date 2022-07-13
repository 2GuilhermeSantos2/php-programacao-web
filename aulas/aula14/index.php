<?php
/*
Loops (Laços de Repetição)



Usado quando você deseja que o mesmo bloco de código seja executado repetidamente um derteminado número de vezes. Em vez de adicionar várias linhas de código quase iguais em um script, podemos usar loops.



Principais no PHP



While = Repete enquanto a condição for true



do...while = executo um bloco, e depois repete o loop desde que a condição seja verdadeira.



for = repete um determinado número de vezes. (Eu expecifico quantas vezes ele será repetido)



foreach = Executa algo para cada item dentro de uma matriz.

*/

//while - Enquanto
/*
$x = 0;

while($x <=100){
    echo "O número é: $x <br>";
    $x+=10; // Vai fazendo de 10 em 10 até o 100
}
*/
//do...while do = faça | while = enquanto | Ele vai o do, depois vai fazer o while enquanto o while for True, ele vai fazer o do novamente até o do virar False.
/*
$x = 5;

do {
    echo "O número é $x <br>";
    $x++;
} while ($x <= 5);
*/

//for
/*
for($x = 0; $x <= 100; $x++){ // Coloco primeiro o valor de índice, por segundo a condição e oque deve fazer. Enquanto a condição for verdeira ele vai acrescentar +1 até a condição do meio for True, nesse caso for = 10.
    echo "O número é: $x <br>";
}
*/
//foreach
$cores = ["azul", "amarelo", "verde","vermelho"];

foreach ($cores as $valor) {
    echo "A cor é $valor <br>";
}


?>

