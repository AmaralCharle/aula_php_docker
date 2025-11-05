<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadastro de Usuários</h2>
    <form action="process.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
