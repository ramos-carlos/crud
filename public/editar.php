<?php
include "../config/Database.php";
include "../classes/Item.php";
include "header.php";

$db = (new Database())->connect();
$item = new Item($db);

$id = $_GET['id'];
$dados = $item->find($id);

if ($_POST) {
    $item->id = $id;
    $item->nome = $_POST['nome'];
    $item->descricao = $_POST['descricao'];
    $item->preco = $_POST['preco'];

    if ($item->update()) {
        header("Location: index.php");
        exit;
    }
}
?>

<h2>Editar Item</h2>

<form method="POST" class="mt-3">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= $dados['nome']; ?>" required>
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <textarea name="descricao" class="form-control"><?= $dados['descricao']; ?></textarea>
    </div>

    <div class="mb-3">
        <label>Preço</label>
        <input type="number" step="0.01" name="preco" class="form-control" value="<?= $dados['preco']; ?>" required>
    </div>

    <button class="btn btn-primary">Atualizar</button>
</form>

<?php include "footer.php"; ?>
