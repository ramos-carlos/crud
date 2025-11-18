<?php 
include "../config/Database.php";
include "../classes/Item.php";
include "header.php";

$db = (new Database())->connect();
$item = new Item($db);

$stmt = $item->read();
?>

<h2 class="mb-3">Cadastro de Itens</h2>
<a href="cadastro.php" class="btn btn-primary mb-3">Novo Item</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['nome']; ?></td>
                <td><?= $row['descricao']; ?></td>
                <td>R$ <?= number_format($row['preco'], 2, ',', '.'); ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="apagar.php?id=<?= $row['id']; ?>" 
                       onclick="return confirm('Excluir item?')"
                       class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include "footer.php"; ?>
