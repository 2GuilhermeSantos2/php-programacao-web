<?php
/*
    $cor = "azul";
    $cor = "vermelho";
    echo $cor;
    */
    $x = 10;
    $y = 15;

    function teste(){
        global $x, $y, $z;
        $z = $x + $y;
        echo "O valor de x dentro da função: $y";
    }
    teste();
    echo "<br> O valor de de x fora da função: $z";
?>