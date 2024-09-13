<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $pais = $_POST['pais'];
    $habilidades = $_POST['habilidade'];
    $comentarios = $_POST['comentarios'];

    // Validação básica (opcional)
    if (empty($nome) || empty($email) || empty($data_nascimento) || empty($pais)) {

        echo "Há campos são obrigatórios!";
    } else {
        // Processa os dados (por exemplo, salva no banco de dados)
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Data de Nascimento: " . htmlspecialchars($data_nascimento) . "<br>";
        echo "País: " . htmlspecialchars($paise) . "<br>";
        echo "Habilidades: " . htmlspecialchars($habilidades) . "<br>";
        echo "Comentarios: " . htmlspecialchars($comentarios) . "<br>";
    }
}
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "Formato de email inválido!";
}

header("Location: obrigado.php");
exit();

