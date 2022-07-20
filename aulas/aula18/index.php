<?php
//$_GET
/*
if (isset($_GET['nome'])){ //Aqui faço o else if, se a várivel tiver nome escrevo o nome no h1, se não tiver tiver escreve mundo.
    $nome = htmlspecialchars($_GET['nome']);
} else {
    $nome = "Mundo";
}
if (isset($_GET['cor'])){
    $cor = htmlspecialchars($_GET['cor']);
}else {
    $cor = 'white';
}
*/
if (isset($_GET['nome']) && isset($_GET['idade'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    echo "<h1> O nome é $nome. E a idade é $idade </h1>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: <?php echo $cor; ?>;
        }       
    </style>

</head>
<body >
        <form method="get" action="recebe_get.php"> <!-- Metodo get vai ser responsável por enviar o formulario, as informações são enviadas pela URL. O action envia os dados do formulário para recebe_get.php !-->
        <input type="text" name="nome" placeholder="Digite seu nome aqui: "> <br>
        <input type="text" name="idade" placeholder="Digite sua idade aqui: "> <br>
        <hr>
        <button type="submit"> Enviar </button>
        </form>
</body>
</html>