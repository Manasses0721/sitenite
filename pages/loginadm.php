<?php
session_start();
include("../conexao.php"); // ajuste o caminho se necessário

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST['nome'];
    $senhaDigitada = $_POST['senha'];

    // =======================
    // 1️⃣ TENTAR LOGIN COMO ADMIN
    // =======================
    // 🔴 ATENÇÃO: Ajuste o nome da tabela e coluna abaixo
    $stmt = $conn->prepare("SELECT id, nome, senha FROM tbadmin WHERE nome = ?");
    $stmt->bind_param("s", $nome);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $admin = $resultado->fetch_assoc();

        if ($senhaDigitada === $admin['senha']) {

            $_SESSION['id'] = $admin['id'];
            $_SESSION['nome'] = $admin['nome'];
            $_SESSION['tipo'] = "admin";

            header("Location: admin/gestao.php"); // Página exclusiva admin
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <main class="w-50 container flex flex-column gap rounded mt-5 pt-5">

        <div class="text-center mb-4">
            <img style="width: 100px;" src="/img/simb_nite-removebg-preview_1.svg" alt="">
            <h2 class="fw-bold">Nite</h2>
            <h5>ADMIN</h5>
        </div>

        <form action="" method="POST" class="p-4">

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                </span>
                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-primary w-50 text-light" type="submit">
                    Entrar
                </button>
            </div>
        </form>

        <?php if (!empty($erro)): ?>
            <div class="alert alert-danger text-center">
                <?= $erro ?>
            </div>
        <?php endif; ?>

        <div class="text-center mt-4">
            <p>Para usuario <a href="login.php">Usuario</a></p>
        </div>

    </main>

</body>
</html>
