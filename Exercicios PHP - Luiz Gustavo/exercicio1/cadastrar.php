<?php
// Verifica se o formulário foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura e sanitiza os dados recebidos do formulário para segurança
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluído</title>
    <link rel="stylesheet" href="">
</head>
<body>
<!-- <div class="navbar">
        <a href="../index.php" class="active">Inicio</a>
        <a href="../exercicio1/form.php">Exercício 1</a>
        <a href="../exercicio2/feedback.php">Exercício 2</a>
        <a href="">Exercício 3</a>
    </div> -->
    <div class="container">
        <h1>Cadastro Concluído</h1>
        <p>Cliente cadastrado com sucesso!</p>
        <ul>
            <!-- Exibe os dados do cliente -->
            <li><strong>Nome:</strong> <?php echo $nome; ?></li>
            <li><strong>E-mail:</strong> <?php echo $email; ?></li>
            <li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
        </ul>
        <a href="form.php">Cadastrar outro cliente</a>
    </div>]
    <style>
/* Reset de margens e padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo do body */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9; /* Cor de fundo suave */
    color: #333; /* Cor do texto padrão */
}

/* Estilo da barra de navegação */
.navbar {
    background-color: #4CAF50; /* Cor verde */
    overflow: hidden;
}

.navbar a {
    float: left;
    display: block;
    color: white; /* Cor do texto da navegação */
    text-align: center;
    padding: 14px 20px; /* Espaçamento interno */
    text-decoration: none; /* Remove sublinhado */
}

.navbar a:hover {
    background-color: #45a049; /* Cor ao passar o mouse */
}

.navbar a.active {
    background-color: #3e8e41; /* Cor ativa */
}

/* Estilo do container principal */
.container {
    max-width: 600px; /* Largura máxima do contêiner */
    margin: 20px auto; /* Margem superior e inferior */
    padding: 20px; /* Preenchimento interno */
    background-color: white; /* Fundo branco */
    border-radius: 8px; /* Bordas arredondadas */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

/* Estilo dos títulos */
h1 {
    margin-bottom: 20px; /* Margem inferior */
    color: #4CAF50; /* Cor verde para o título */
    text-align: center; /* Texto centralizado */
}

/* Estilo dos parágrafos */
.container p {
    margin-bottom: 15px; /* Margem inferior */
    color: #555; /* Cor do texto dos parágrafos */
}

/* Estilo da lista */
ul {
    list-style-type: none; /* Remove marcadores da lista */
    margin-top: 20px; /* Margem superior */
    padding-left: 0; /* Remove preenchimento à esquerda */
}

li {
    margin-bottom: 10px; /* Margem inferior para itens da lista */
}

/* Estilo para negrito */
.container strong {
    color: #4CAF50; /* Cor verde para o texto em negrito */
}

/* Estilo do link para cadastrar outro cliente */
.container a {
    display: inline-block; /* Exibe como bloco inline */
    margin-top: 20px; /* Margem em cima */
    padding: 10px 15px; /* Preenchimento do botão */
    background-color: #4CAF50; /* Cor de fundo verde */
    color: white; /* Cor do texto do botão */
    text-decoration: none; /* Remove sublinhado */
    border-radius: 4px; /* Bordas arredondadas do botão */
    text-align: center; /* Texto centralizado */
    transition: background-color 0.3s; /* Transição suave */
}

.container a:hover {
    background-color: #45a049; /* Cor ao passar o mouse */
    text-decoration: none; /* Remove sublinhado ao passar o mouse */
}

    </style>
</body>
</html>
