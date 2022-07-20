<?php
/* SUPERGLOBAIS

Algumas variáveis predefinidas no PHP são "superglobais", o que significa que elas são sempre acessíveis, independmente do escopo - e você pode acessá-las a partir de qualquer funçã,classe ou arquivo sem ter que fazer nada de especial.

Basta invocar essas variáveis. São elas:

$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
*/

/* $GLOBALS 
$a = 10;
$b = 20;

function soma(){
    //$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    global $a, $b, $c;  //Outra forma de declarar váriaveis globais.
    $c = $a + $b;
}

soma();
echo $c;
*/
/*
echo $_SERVER['PHP_SELF']; //Mostra o caminho do arquivo que estou trabalhando.
echo "<br>";
echo $_SERVER['SERVER_NAME']; //Mostra o nome do servidor, onde o arquivo esta rodando.
echo "<br>";
echo $_SERVER['HTTP_HOST']; //Mostra o cabeçalho do servidor, onde o arquivo esta rodando.
echo "<br>";
echo $_SERVER['REMOTE_ADDR']; //Mostra o endereço de ip, onde o arquivo esta rodando.
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; //Mostra alguma informações sobre o cliente.
*/
foreach ($_SERVER as $chave => $valor){ //Mostra os parâmentros e quais os resultados (oque ele mostra)
    echo "<strong>$chave</strong> : $valor <br>";
}
?>