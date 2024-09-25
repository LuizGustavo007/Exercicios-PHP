<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = htmlspecialchars($_POST['produto']); // Proteção contra XSS
    $nota = htmlspecialchars($_POST['nota']);
    $comentario = htmlspecialchars($_POST['comentario']);
} else {
    // Redireciona se não for uma requisição POST
    header('Location: formulario.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback do Produto</title>
    <link rel="stylesheet" href="feedback.css"> <!-- Link para o CSS -->
</head>
<body>
    <div class="feedback-card">
        <h1>Detalhes do Feedback</h1>
        <p><strong>Nome Do Produto:</strong> <?php echo $produto; ?></p>
        <p><strong>Nota:</strong> <?php echo $nota; ?></p>
        <p><strong>Comentário:</strong> <?php echo $comentario; ?></p>
        <a href="feedback.php">Cadastrar outro feedback</a>
    </div>
    <style>
/* Reset de margens e padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo do body */
body {
    font-family: 'Arial', sans-serif; /* Fonte padrão */
    background-color: #f4f4f9; /* Cor de fundo suave */
    color: #333; /* Cor do texto padrão */
    display: flex; /* Flexbox para centralizar o conteúdo */
    justify-content: center; /* Centraliza horizontalmente */
    align-items: center; /* Centraliza verticalmente */
    height: 100vh; /* Ocupa toda a altura da tela */
}

/* Estilo do card de feedback */
.feedback-card {
    background-color: white; /* Fundo branco para o card */
    border-radius: 8px; /* Bordas arredondadas */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave */
    padding: 30px; /* Preenchimento interno */
    width: 90%; /* Largura do card, com um limite máximo */
    max-width: 500px; /* Largura máxima do card */
    text-align: center; /* Texto centralizado */
}

/* Estilo dos títulos */
.feedback-card h1 {
    margin-bottom: 20px; /* Espaçamento abaixo do título */
    color: #4CAF50; /* Cor verde para o título */
}

/* Estilo dos parágrafos */
.feedback-card p {
    margin: 15px 0; /* Margem em cima e embaixo dos parágrafos */
    color: #333; /* Cor do texto */
}

/* Estilo para negrito */
.feedback-card strong {
    color: #4CAF50; /* Cor verde para o texto em negrito */
}

/* Estilo do link para cadastrar outro feedback */
.feedback-card a {
    display: inline-block; /* Exibe como bloco inline */
    margin-top: 20px; /* Margem em cima */
    padding: 12px 20px; /* Preenchimento do botão */
    background-color: #4CAF50; /* Cor de fundo verde */
    color: white; /* Cor do texto do botão */
    text-decoration: none; /* Remove sublinhado */
    border-radius: 4px; /* Bordas arredondadas do botão */
    transition: background-color 0.3s; /* Transição suave ao passar o mouse */
}

/* Efeito hover no botão */
.feedback-card a:hover {
    background-color: #45a049; /* Cor de fundo ao passar o mouse */
}

    </style>
</body>
</html>
