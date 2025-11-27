<?php
include("../conexao.php");

// Buscar todas as notícias
$sql = "SELECT * FROM tbnoticias ORDER BY data DESC";
$result = $conn->query($sql);

// Criar array com todas as notícias
$noticias = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $noticias[] = $row;
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Nite-Núcleo de Inovação</title>

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../components/css/noticia.css">
  <link rel="stylesheet" href="../components/css/pages.css">
</head>

<body>

  <main class="min-h-screen flex flex-col p-4 ">
    <?php include '../components/navbar.php'; ?>
    <main>
      <section class="latest-news">
        <br>
        <h1>Últimas notícias</h1>

        <?php if (count($noticias) > 0): ?>

          <?php foreach ($noticias as $row): ?>
            <div class="conteiner">
              
      <?php $foto = $row['imagem'];
      $titulo = $row['titulo'];
      $descricao = $row['conteudo'];
      include "../components/noticia.php"; ?>
       </div>
    <?php endforeach; ?>
        <?php else: ?>
          <p>Nenhuma notícia cadastrada.</p>
        <?php endif; ?>
      </section>


    </main>
  </main>

</body>

</html>