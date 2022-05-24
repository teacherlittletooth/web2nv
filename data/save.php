<?php

use Database\Database;

//cod
if( isset($_POST['cod']) ) {
    $cod = $_POST['cod'];
} else {
    $cod = null;
}

//itens
if( isset($_POST['itens']) ) {
    $itens = $_POST['itens'];
} else {
    $itens = null;
}

//qtde
if( isset($_POST['qtde']) ) {
    $qtde = $_POST['qtde'];
} else {
    $qtde = null;
}

//pgto
if( isset($_POST['pgto']) ) {
    $pgto = $_POST['pgto'];
} else {
    $pgto = null;
}

//entrega
if( isset($_POST['entrega']) ) {
    $entrega = $_POST['entrega'];
} else {
    $entrega = null;
}

// var_dump($cod);
// var_dump($itens);
// var_dump($qtde);
// var_dump($pgto);
// var_dump($entrega);

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->update(
    "UPDATE pedidos SET itens = '$itens', qtde = $qtde,
    pgto = '$pgto', entrega = '$entrega'
    WHERE cod = $cod; "
);

//var_dump($resultDb);
if($resultDb) {
    header('location: ../public/lista.php');
} else {
    echo "Algum erro aconteceu na atualização :(";
}