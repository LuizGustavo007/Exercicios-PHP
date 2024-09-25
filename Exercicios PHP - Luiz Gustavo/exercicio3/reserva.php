<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala de Reunião</title>
    <link rel="stylesheet" href="exerc3.css"> <!-- Link para o CSS -->
</head>
<body>
    <div class="navbar">
        <a href="../index.php" class="active">Início</a>
        <a href="../exercicio1/form.php">Exercício 1</a>
        <a href="../exercicio2/feedback.php">Exercício 2</a>
        <a href="../exercicio3/reserva.php">Exercício 3</a>
    </div>
    <div class="container">
        <h1>Reserva de Sala de Reunião</h1>
        <form action="processar_reserva.php" method="POST">
            <label for="nome">Nome do Solicitante:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data">Data da Reunião:</label>
            <input type="date" id="data" name="data" required>

            <label for="hora">Horário da Reunião:</label>
            <input type="time" id="hora" name="hora" required>

            <button type="submit">Reservar Sala</button>
        </form>
    </div>
</body>
</html>
