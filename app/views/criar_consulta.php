<!-- app/views/criar_consulta.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Nova Consulta</title>
</head>
<body>
    <h1>Criar Nova Consulta</h1>
    <form action="/consultas/salvar" method="post">
        <label for="paciente">Paciente:</label>
        <input type="text" id="paciente" name="paciente" required><br><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" required><br><br>

        <label for="medico">Médico:</label>
        <input type="text" id="medico" name="medico" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea><br><br>

        <button type="submit">Salvar Consulta</button>
    </form>
</body>
</html>
