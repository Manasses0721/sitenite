<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
include("../../conexao.php");

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT nome, email FROM tbusuarios WHERE idtbUsuarios = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$usuario = $result->fetch_assoc();
?>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h2>Editar Usuário</h2>

   <form action="" method="POST">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?= $usuario['nome'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?= $usuario['email'] ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label>Nova Senha (opcional)</label>
        <input type="password" name="senha" class="form-control" placeholder="Deixe vazio para manter a atual">
    </div>

    <button type="submit" class="btn btn-primary">Salvar alterações</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $novoNome = $_POST['nome'];
    $novoEmail = $_POST['email'];
    $novaSenha = $_POST['senha'];

    // Se a senha estiver vazia → manter a original
    if (empty($novaSenha)) {

        $stmt = $conn->prepare("UPDATE tbusuarios SET nome=?, email=? WHERE idtbUsuarios=?");
        $stmt->bind_param("ssi", $novoNome, $novoEmail, $id);

    } else {

        // Atualizar com a nova senha
        $stmt = $conn->prepare("UPDATE tbusuarios SET nome=?, email=?, senha=? WHERE idtbUsuarios=?");
        $stmt->bind_param("sssi", $novoNome, $novoEmail, $novaSenha, $id);
    }

    if ($stmt->execute()) {
        header("Location: gestusuario.php?msg=editado");
        exit;
    } else {
        echo "Erro ao salvar.";
    }
}

?>

</div>

</body>
</html>
