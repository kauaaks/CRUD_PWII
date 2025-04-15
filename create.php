<?php
require 'conexao.php';
if ($_SERVER["REQUEST_METHOD"] ===
"POST") {
$nome = $_POST['nome'];
$email = $_POST['email'];
$sql =
"INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome'
, $nome);
$stmt->bindParam(':email'
, $email);
if ($stmt->execute()) {
echo "Usuário cadastrado com sucesso!";
} else {
echo "Erro ao cadastrar.";
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="create.php">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>