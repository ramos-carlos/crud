<?php
require "Database.php";

$db = new Database();
$conn = $db->connect();

echo "Conectou!";
