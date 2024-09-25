<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exerc2.css">
</head>
<body>
<div class="navbar">
        <a href="../index.php" class="active">Inicio</a>
        <a href="../exercicio1/form.php">Exercício 1</a>
        <a href="../exercicio2/feedback.php">Exercício 2</a>
        <a href="../exercicio3/reserva.php">Exercício 3</a>
    </div>
    <form action="processar_feedback.php" method="POST">
        <label for="produto">Nome Do Produto:</label>
        <input type="text" id="produto" name="produto" required><br><br>
        <label for="nota">Nota:</label>
        <select id="nota" name="nota" required>
            <option value="">Selecione</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <label for="comentario">Comentario:</label>
        <input type="text" id="comentario" name="comentario" required><br>
        <input type="submit" value="Enviar">
        
    </form>
    
</body>
</html>