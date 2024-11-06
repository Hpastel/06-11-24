<?php
// config/database.php
$host = 'localhost';
$dbname = 'gestao_consultas';
$username = 'root';  // Alterar conforme seu banco de dados
$password = '';      // Alterar conforme seu banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>
