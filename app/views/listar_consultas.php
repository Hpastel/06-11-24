<!-- app/views/listar_consultas.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Consultas</title>
</head>
<body>
    <h1>Listagem de Consultas</h1>
    <a href="/consultas/criar">Criar Nova Consulta</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Médico</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($consultas) && $consultas): ?>
                <?php foreach ($consultas as $consulta): ?>
                <tr>
                    <td><?= htmlspecialchars($consulta['id']) ?></td>
                    <td><?= htmlspecialchars($consulta['paciente']) ?></td>
                    <td><?= htmlspecialchars($consulta['data']) ?></td>
                    <td><?= htmlspecialchars($consulta['hora']) ?></td>
                    <td><?= htmlspecialchars($consulta['medico']) ?></td>
                    <td><?= htmlspecialchars($consulta['descricao']) ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Nenhuma consulta encontrada.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
