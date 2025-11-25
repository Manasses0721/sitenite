<?php
include("../../conexao.php");

// Recebendo dados do formulário
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$autor = $_POST['autor'];

// Pasta onde as fotos serão guardadas
$pasta = "uploads/";

// Cria a pasta se não existir
if (!is_dir($pasta)) {
    mkdir($pasta, 0777, true);
}

// Pega informações da imagem
$nomeImagem = $_FILES['imagem']['name'];
$tempImagem = $_FILES['imagem']['tmp_name'];

// Gera um nome único para evitar duplicações
$nomeFinal = uniqid() . "-" . $nomeImagem;

// Move a imagem enviada para a pasta destino
move_uploaded_file($tempImagem, $pasta . $nomeFinal);

// Salva os dados no banco (ORDEM CORRETA)
$stmt = $conn->prepare("INSERT INTO tbnoticias (titulo, conteudo, imagem, autor) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $titulo, $conteudo, $nomeFinal, $autor);

if ($stmt->execute()) {

    // Mensagem de sucesso antes do redirecionamento
    echo "<script>
            alert('Notícia cadastrada com sucesso!');
            window.location.href = '../index.php';
          </script>";
} else {
    echo "Erro ao cadastrar notícia: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
