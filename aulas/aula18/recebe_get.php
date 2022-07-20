<?php

if (isset($_GET['nome']) && isset($_GET['idade'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    echo "<h1> O nome é $nome. E a idade é $idade </h1>";
}

?>