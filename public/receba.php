<?php
    use Database\Database;

    if( isset($_POST['email']) ) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }


    if( isset($_POST['pass']) ) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }


//////////////////////////////////////////////////////////////////////////

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->select(
    "SELECT * FROM usuarios WHERE email = '$email'; "
);

//var_dump($resultDb);

if( isset($resultDb[0]) ) {
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}

//var_dump($resultDb[0]);

//////////////////////////////////////////////////////////////////////////

    if($email != null && $pass != null) {
        if($email == $emailDb && $pass == $senhaDb) {
            $msg = 'Bem vindo!';
            //$redirect = "<meta http-equiv='refresh' content='3; url=https://qi.edu.br' />";
        } else {
            $msg = 'Acesso negado!';
            //$redirect = "<meta http-equiv='refresh' content='3; url=../index.php' />";
        }
    }

require_once "../src/views/header_nav.php";
?>
    <div class="container mt-3">

        <div class="text-center">
            <h1><?= (isset($msg) ? $msg : "Visitante") ?></h1>
            <?= (isset($redirect) ? $redirect : "<hr>") ?>
        </div>

        <form method="get" action="checkbox.php">
            <div class="form-group">
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Pão com gergelim"/>Pão com gergelim<br>
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Queijo"/>Queijo<br>
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Hamburguer"/>Hamburguer<br>
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Alface"/>Alface<br>
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Molho"/>Molho<br>
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Cebola"/>Cebola<br>
                    <input type="checkbox" class="form-check-input" name="ingredientes[]" value="Picles"/>Picles<br>
                </div>

                <hr>
                Quantidade:
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <input type="number" name="qtde" class="form-control" value="1" min="1"/>
                    </div>
                </div>
                
                <hr>
                Pagamento:
                <div class="d-flex">
                    <div class="form-check col">
                        <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" checked/> Dinheiro
                    </div>
                    <div class="form-check col">
                        <input type="radio" class="form-check-input" name="pgto" value="Pix"/> Pix
                    </div>
                    <div class="form-check col">
                        <input type="radio" class="form-check-input" name="pgto" value="Cartão"/> Cartão
                    </div>
                </div>
                
                <hr>
                Entrega:
                <div class="row">
                    <div class="col-lg-3 col-sm-4">
                        <select name="entrega" class="form-select" required>
                            <option value="">Selecione...</option>
                            <option value="Viamão">Viamão</option>
                            <option value="Gravataí">Gravataí</option>
                            <option value="Alvorada">Alvorada</option>
                            <option value="Canoas">Canoas</option>
                            <option value="Porto Alegre">Porto Alegre</option>
                        </select>
                    </div>
                </div>

                <br><br>

                <div class="row">
                    <input type="submit" class="col-lg-4 offset-lg-2 col-sm-5 offset-sm-1 btn btn-dark" value="Fazer pedido"/>
                    &nbsp;
                    <input type="reset" class="col-lg-4 col-sm-5 btn btn-danger" value="Reiniciar"/>
                </div>

            </div>
        </form>

    </div>

<?php require_once "../src/views/footer.php"; ?>