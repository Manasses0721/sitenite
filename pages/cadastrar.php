<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <main class="w-50 container flex flex-column gap  rounded mt-5 pt-5">

        <div class="text-center mb-4">
            <img style="width: 100px;" src="/img/simb_nite-removebg-preview_1.svg" alt="">
            <h2 class="fw-bold">Nite</h2>
        </div>

        <!-- Formulário -->
        <form method="POST" action="">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                </span>
                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary w-50" type="submit" name="cadastrar">Cadastrar</button>
            </div>
        </form>

        <!-- PHP -->
        <?php
        include('../conexao.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Prepared statement para segurança
            $stmt = $conn->prepare("INSERT INTO tbusuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome, $email, $senha);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success mt-4'>Usuário cadastrado com sucesso!</div>";
                // Redireciona após 2 segundos
                echo "<meta http-equiv='refresh' content='2;url=../pages/index.php'>";
            } else {
                echo "<div class='alert alert-danger mt-4'>Erro ao cadastrar: " . $stmt->error . "</div>";
            }

            $stmt->close();
        }
        ?>
    </main>
</body>

</html>
