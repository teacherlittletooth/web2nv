<?php

use Database\Database;

 require_once "../src/views/header_nav.php"; ?>

<?php
    require_once "../src/model/Database.php";
    $db = new Database();

    $resultDb = $db->select(
        "SELECT * FROM pedidos;"
    );

    //var_dump($resultDb);
?>

<table class="table container mt-3">
    <thead class="bg-dark text-white">
        <th>Código</th>
        <th>Data e hora</th>
        <th>Itens</th>
        <th>Quantidade</th>
        <th>Pagamento</th>
        <th>Entrega</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>

    <?php foreach($resultDb as $linha) : ?>
        <tr>
            <td> <?= $linha->cod ?> </td>
            <td> <?= $linha->data_hora ?> </td>
            <td> <?= $linha->itens ?> </td>
            <td> <?= $linha->qtde ?> </td>
            <td> <?= $linha->pgto ?> </td>
            <td> <?= $linha->entrega ?> </td>
            <td>
                <a title="Editar" href="../public/atualiza.php?cod=<?= $linha->cod ?>">
                    <i class="bi bi-pen"></i>
                </a>
            </td>
            <td>
                <a title="Apagar" onclick="confirmaDelete( <?= $linha->cod ?> );" >
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<script>
    function confirmaDelete(id) {
        if( confirm("Deseja excluir o pedido "+ id +"?") ) {
            window.location.href="../data/delete.php?cod="+id;
        } else {
            alert("Exclusão cancelada!");
        }
    }
</script>

<?php require_once "../src/views/footer.php"; ?>