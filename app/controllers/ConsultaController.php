<?php
// app/controllers/ConsultaController.php
require_once 'app/models/Consulta.php';

class ConsultaController {

    public function listar() {
        $consultas = Consulta::listar();
        require_once 'app/views/listar_consultas.php';
    }

    public function criar() {
        require_once 'app/views/criar_consulta.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $paciente = $_POST['paciente'];
            $data = $_POST['data'];
            $hora = $_POST['hora'];
            $medico = $_POST['medico'];
            $descricao = $_POST['descricao'];

            Consulta::criar($paciente, $data, $hora, $medico, $descricao);
            header("Location: /consultas");
            exit();
        }
    }
}
?>
