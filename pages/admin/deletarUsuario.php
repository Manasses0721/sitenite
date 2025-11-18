<?php
include("../../conexao.php");

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM tbusuarios WHERE idtbUsuarios = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: gestusuario.php?msg=deletado");
} else {
    echo "Erro ao deletar.";
}
