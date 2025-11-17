<?php
include "../config/Database.php";
include "../classes/Item.php";
include "header.php";

$db = (new Database())->connect();
$item = new Item($db);

if ($_POST) {
    $item->nome = $_POST['nome'];
    $item->descricao = $_POST['descricao'];
    $item->preco = $_POST['preco'];

    if ($item->create()) {
        header("Location: index.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Erro ao salvar</div>";
    }
}
?>

<h2>Novo Item</h2>

<div class="card p-4 mt-3">
<form method="POST">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <textarea name="descricao" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Preço</label>
        <input type="number" step="0.01" name="preco" class="form-control" required>
    </div>

    <button class="btn btn-success">Salvar</button>
</form>
</div>

<?php include "footer.php"; ?>

