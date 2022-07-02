<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 PHP</title>
</head>
<body>
   <!---<?php echo $js; ?> -->

    <?php $ativado = "FALSE"; ?>
    <?php if ($ativado == "TRUE"){ ?>
        <h1> Está ativado </h1>
    <?php }else{ ?>
        <h1> Não está ativado </h1>
    <?php } ?>

</body>
</html>