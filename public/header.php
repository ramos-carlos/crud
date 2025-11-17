<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Lista de itens</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body { transition: background-color .25s, color .25s; }
        body.light { background: #fff; color:#000; }
        body.dark  { background:#121212; color:#fff; }
        .card.dark { background:#1f1f1f; color:#fff; }
        .navbar.light { background:#f8f9fa; }
        .navbar.dark  { background:#1f1f1f; }

        /* Tabela no modo dark */
        body.dark table {
        background-color: #1f1f1f !important;
        color: #fff !important;
        }

        body.dark table th,
        body.dark table td {
        background-color: #1f1f1f !important;
        color: #fff !important;
        border-color: #444 !important;
        }

        body.dark .table-hover tbody tr:hover td {
        background-color: #2a2a2a !important;
        }

        body.dark .card {
        background-color: #1f1f1f;
        color: #fff;
        }

        body.dark .btn-primary {
        background-color: #0069d9;
        }

        body.dark .btn-warning {
        background-color: #d39e00;
        }

        body.dark .btn-danger {
        background-color: #c82333;
        }

    </style>
</head>
<body>

<nav id="navbar" class="navbar navbar-expand-lg navbar-light px-4 py-3 shadow-sm">
    <a class="navbar-brand fw-bold" href="index.php"></a>

    <button id="themeToggle" class="btn btn-outline-secondary ms-auto">
        <i id="themeIcon" class="bi bi-moon-fill"></i>
    </button>
</nav>

<div class="container mt-4">
