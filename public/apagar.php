<?php
include "../config/Database.php";
include "../classes/Item.php";

$db = (new Database())->connect();
$item = new Item($db);

$id = $_GET['id'];
$item->delete($id);

header("Location: index.php");
exit;
