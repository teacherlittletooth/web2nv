<?php

use Model\Pedido;

    require_once '../vendor/autoload.php';

    $ped = new Pedido(); //Criação do objeto...

    if( isset($_GET['ingredientes']) ) {
        $ped->itens = $_GET['ingredientes']; //Preenchido o atributo 'itens'
    } else {
        $ped->itens = null;
    }

    if( isset($_GET['qtde']) ) {
        $ped->qtde = $_GET['qtde']; //Preenchido o atributo 'qtde'
    } else {
        $ped->qtde = null;
    }

    if( isset($_GET['pgto']) ) {
        $ped->pgto = $_GET['pgto']; //Preenchido o atributo 'pgto'
    } else {
        $ped->pgto = null;
    }

    if( isset($_GET['entrega']) ) {
        $ped->entrega = $_GET['entrega']; //Preenchido o atributo 'entrega'
    } else {
        $ped->entrega = null;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listagem de dados</title>
</head>
<body>
    <h3>
        <?= $ped->darDesconto() ?>
    </h3>

    <?php if($ped->itens != null) : ?>
        <?php foreach($ped->itens as $i) : ?>
        <!-- Nossa estrutura de html que se repetirá -->
        <h3 style="font-family: courier;"> <?= $i ?> </h3><hr>
        <?php endforeach ?>
    <?php else : ?>
        <h3 style='text-align: center;'> Sem ingredientes. </h3><hr>
    <?php endif; ?>

    <h3 style="font-family: courier; color: blue;">
        <?= $ped->qtde ?>
    </h3><hr>
    <h3 style="font-family: courier; color: red">
        <?= $ped->pgto ?>
    </h3><hr>
    <h3 style="font-family: courier; color: green">
        <?= $ped->entrega ?>
    </h3><hr>
</body>
</html>