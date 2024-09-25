<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="exerc1.css">
</head>
<body>
<div class="navbar">
        <a href="../index.php" class="active">Inicio</a>
        <a href="../exercicio1/form.php">Exercício 1</a>
        <a href="../exercicio2/feedback.php">Exercício 2</a>
        <a href="../exercicio3/reserva.php">Exercício 3</a>
    </div>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <form action="cadastrar.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
