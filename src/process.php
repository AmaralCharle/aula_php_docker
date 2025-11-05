<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "usersdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

if ($nome === '' || $email === '') {
    echo "Nome e email são obrigatórios.";
    echo '<br><a href="index.php">Voltar</a>';
    exit;
}

$stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
if ($stmt === false) {
    echo "Erro no prepare: " . $conn->error;
    $conn->close();
    exit;
}

$stmt->bind_param("ss", $nome, $email);
if ($stmt->execute()) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
echo '<br><a href="index.php">Voltar</a>';
?>
