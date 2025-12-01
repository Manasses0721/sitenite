<?php
include('../../conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">
    <div class="w-full px-4 shadow bg-transparent blur-5 d-flex justify-content-between rounded" id="navbar-links">
        <div class=" d-flex gap-2 align-items-center" style="width: 80px; height: 80px;">
            <img src="../../img/simb_nite-removebg-preview_1.svg" alt="Abrir menu" class="w-100 h-auto"
                onclick="toggleMenu()">
            <nav class="d-flex gap-2 align-items-center text-white">
                <a href="../index.php" class="nav-item nav-link  text-info" id="home-menu">Home</a>
                <a href="../empresas.php" class="nav-item nav-link text-info" id="about-menu">Empresas</a>
                <a href="gestusuario.php" class="nav-item nav-link text-info" id="news-menu">usuario</a>
            </nav>
        </div>

        <div class=" d-flex align-items-center gap-4 p-4 " id="nav-container">
            <div class="d-flex gap-3 align-items-center">
                <a href="../../pages/login.php" class="text-primary" id="login-menu">Entrar</a>
                <?php $text = "Cadastro";
                include 'buttonad.php'; ?>
            </div>
        </div>

    </div>
    <h2 class="mb-3">Usuários e Colaboradores</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Tabela 1 — Usuários e colaboradores (UNION)
            $sql = "
            SELECT nome, 'Usuario' AS tipo FROM tbusuarios
            UNION
            SELECT nome, 'Colaborador' AS tipo FROM tbcolaborador
        ";
            $sql = "
                CREATE OR REPLACE VIEW vw_pessoas AS
                SELECT nome, 'Usuario' AS tipo FROM tbusuarios
                UNION
                SELECT nome, 'Colaborador' AS tipo FROM tbcolaborador
                ";

            if ($conn->query($sql) === TRUE) {
                echo "View criada com sucesso!";
            } else {
                echo "Erro ao criar View: " . $conn->error;
            }

            $sql = "SELECT * FROM vw_pessoas";
            $result = $conn->query($sql);


            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['nome']}</td>";
                echo "<td>{$row['tipo']}</td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>


    <h2 class="mt-5 mb-3">Administradores (ID > 7)</h2>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Tabela 2 — Admins usando subquery
            $idMinimo = 7;

            $sql = "
            SELECT *
            FROM (
                SELECT id, nome, senha FROM tbadmin
            ) AS admins_temp
            WHERE id > ?
        ";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $idMinimo);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['nome']}</td>";
                echo "<td>{$row['senha']}</td>";
                echo "</tr>";
            }

            $conn->next_result();
            $result = $conn->query("SELECT * FROM logs ORDER BY data_hora DESC");

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    echo $row['mensagem'] . " - " . $row['data_hora'] . "<br>";
                }
            }

            $nome = "admin"; // ou $_POST['nome']
            
            $stmt = $conn->prepare("CALL loginAdmin(?)");
            $stmt->bind_param("s", $nome);
            $stmt->execute();

            $result = $stmt->get_result(); // pega o resultado da procedure
            
            if ($result && $result->num_rows > 0) {
                while ($admin = $result->fetch_assoc()) {
                    echo "ID: " . $admin['id'] . "<br>";
                    echo "Nome: " . $admin['nome'] . "<br>";
                    echo "Senha: " . $admin['senha'] . "<br><br>";
                }
            } else {
                echo "Nenhum admin encontrado.";
            }

            $conn->next_result();
            ?>
        </tbody>
    </table>

</body>

</html>