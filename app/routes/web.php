<?php
// routes/web.php
require_once 'app/controllers/ConsultaController.php';

$consultaController = new ConsultaController();

// Rota para listar as consultas
if ($_SERVER['REQUEST_URI'] == '/consultas') {
    $consultaController->listar();
}

// Rota para mostrar o formulário de criação
if ($_SERVER['REQUEST_URI'] == '/consultas/criar') {
    $consultaController->criar();
}

// Rota para salvar a consulta
if ($_SERVER['REQUEST_URI'] == '/consultas/salvar' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $consultaController->salvar();
}
?>
