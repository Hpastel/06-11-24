<?php
// app/models/Consulta.php
require_once 'config/database.php';

class Consulta {
    public $id;
    public $paciente;
    public $data;
    public $hora;
    public $medico;
    public $descricao;

    public function __construct($paciente = null, $data = null, $hora = null, $medico = null, $descricao = null, $id = null) {
        $this->id = $id;
        $this->paciente = $paciente;
        $this->data = $data;
        $this->hora = $hora;
        $this->medico = $medico;
        $this->descricao = $descricao;
    }

    public static function listar() {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM consultas");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function criar($paciente, $data, $hora, $medico, $descricao) {
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO consultas (paciente, data, hora, medico, descricao) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$paciente, $data, $hora, $medico, $descricao]);

        return $pdo->lastInsertId();
    }
}
?>
