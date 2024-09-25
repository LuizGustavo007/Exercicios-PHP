<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        /* Estilo básico do corpo */
        body {
            font-family: Arial, sans-serif; /* Fonte geral */
            margin: 0; /* Remove margens padrão */
            padding: 0; /* Remove preenchimento padrão */
            background-color: #f4f4f4; /* Cor de fundo clara */
        }

        /* Estilo para a mensagem de boas-vindas */
        .welcome-message {
            max-width: 600px; /* Largura máxima */
            margin: 20px auto; /* Centraliza horizontalmente */
            padding: 20px; /* Preenchimento interno */
            background-color: white; /* Fundo branco */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            text-align: center; /* Centraliza o texto */
        }

        /* Estilo da lista de exercícios */
        .exercise-list {
            max-width: 600px; /* Largura máxima */
            margin: 20px auto; /* Centraliza horizontalmente */
            padding: 20px; /* Preenchimento interno */
            background-color: white; /* Fundo branco */
            border-radius: 8px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            text-align: center; /* Centraliza o texto */
        }

        .exercise-list a {
            display: block; /* Exibe cada link em bloco */
            margin: 10px 0; /* Margem em cima e embaixo dos links */
            padding: 10px; /* Preenchimento interno do link */
            background-color: #4CAF50; /* Cor verde */
            color: white; /* Cor do texto do link */
            text-decoration: none; /* Remove sublinhado */
            border-radius: 4px; /* Bordas arredondadas do link */
            transition: background-color 0.3s; /* Transição suave */
        }

        .exercise-list a:hover {
            background-color: #45a049; /* Cor ao passar o mouse */
        }

        /* Estilo responsivo */
        @media (max-width: 768px) {
            .exercise-list {
                flex-direction: column; /* Alinha os itens verticalmente em telas menores */
            }
        }
    </style>
</head>
<body>
    <div class="welcome-message">
        <h1>Seja Bem-vindo ao Portal de Exercícios!</h1>
        <p>Estamos felizes em tê-lo aqui. Explore nossos exercícios e faça suas reservas facilmente.</p>
    </div>

    <div class="exercise-list">
        <h2>Exercícios Disponíveis</h2>
        <a href="./exercicio1/form.php">Exercício 1</a>
        <a href="./exercicio2/feedback.php">Exercício 2</a>
        <a href="./exercicio3/reserva.php">Exercício 3</a>
    </div>
</body>
</html>
