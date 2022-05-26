<?php

use Database\Database;

if( isset($_GET['cod']) ) {
    $cod = $_GET['cod'];
} else {
    header('location: ../public/lista.php');
}

//Chamar o arquivo Database.php
require_once "../src/model/Database.php";

//Instanciar um novo objeto da classe Database
$db = new Database();

//Chamando a função "delete" da classe "Database"
$resultDb = $db->delete(
    "DELETE FROM pedidos WHERE cod = $cod; "
);

if($resultDb) : ?>
    <script>
        alert("Pedido excluído com sucesso!");
        window.location.replace("../public/lista.php");
    </script>
<?php else :
    echo "Erro durante a exclusão 🍍";
endif;