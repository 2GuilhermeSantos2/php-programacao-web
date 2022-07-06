<?php

    $palavra = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus doloribus aut omnis accusamus, officia commodi aspernatur fuga ipsum adipisci illum quia nobis tenetur assumenda soluta laborum nesciunt saepe velit quam.";

    //echo strlen($palavra);
    //echo str_word_count($palavra);
    //echo strrev($palavra)
    //echo strpos("Oi tudi bom", "o");
    //$palavra = "Olá mundo";
    //echo str_replace("Guilherme", "mundo", $palavra);

    $data = "05-07-2022";
    $data_formatada = str_replace("-","/",$data);
    echo "Data antiga: $data <br> Data formatada: $data_formatada";
    ?>