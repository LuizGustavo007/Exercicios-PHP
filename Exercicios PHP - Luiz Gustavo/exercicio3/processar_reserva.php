<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitização dos dados recebidos
    $nome = htmlspecialchars($_POST['nome']);
    $data = htmlspecialchars($_POST['data']);
    $hora = htmlspecialchars($_POST['hora']);
} else {
    // Redireciona se não for uma requisição POST
    header('Location: reserva.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Confirmada</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Reserva Confirmada</h1>
        <p>Obrigado, <strong><?php echo $nome; ?></strong>, sua reserva foi feita com sucesso!</p>
        <ul>
            <li><strong>Data da Reunião:</strong> <?php echo date('d/m/Y', strtotime($data)); ?></li>
            <li><strong>Horário da Reunião:</strong> <?php echo date('H:i', strtotime($hora)); ?></li>
        </ul>
        <a href="reserva.php">Fazer outra reserva</a>
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
}


/* Estilo do container principal */
.container {
    max-width: 600px; /* Largura máxima do container */
    margin: 20px auto; /* Margem centralizada */
    padding: 20px; /* Preenchimento interno */
    background-color: white; /* Fundo branco */
    border-radius: 8px; /* Bordas arredondadas */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

/* Estilo dos títulos */
h1 {
    margin-bottom: 20px; /* Espaçamento abaixo do título */
    color: #4CAF50; /* Cor verde para o título */
    text-align: center; /* Centraliza o título */
}

/* Estilo dos parágrafos */
p {
    margin-bottom: 15px; /* Margem abaixo do parágrafo */
}

/* Estilo da lista */
ul {
    list-style-type: none; /* Remove os marcadores da lista */
    margin-top: 20px; /* Margem acima da lista */
    padding-left: 0; /* Remove preenchimento padrão */
}

li {
    margin-bottom: 10px; /* Margem abaixo de cada item da lista */
}

/* Estilo do link para fazer outra reserva */
.container a {
    display: inline-block; /* Exibe como bloco inline */
    margin-top: 20px; /* Margem acima do link */
    padding: 10px 15px; /* Preenchimento do link */
    background-color: #4CAF50; /* Cor de fundo verde */
    color: white; /* Cor do texto do link */
    text-decoration: none; /* Remove sublinhado */
    border-radius: 4px; /* Bordas arredondadas */
    text-align: center; /* Centraliza o texto do link */
    transition: background-color 0.3s; /* Transição suave ao passar o mouse */
}

.container a:hover {
    background-color: #45a049; /* Mudança ao passar o mouse */
}

    </style>
</body>
</html>
