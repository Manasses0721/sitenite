<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <title>Nite-Núcleo de Inovação</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="../components/css/noticia.css">
  <link rel="stylesheet" href="../components/css/pages.css">

</head>

<body>
  <main class="min-h-screen flex flex-col p-4 ">
    <?php include '../components/navbar.php'; ?>
    <main>
    <section class="grid-section">
      <div class="div1"></div>
      <div class="div2"></div>
      <div class="div3"></div>
    </section>
    <section class="latest-news">
      <h1>Ultimas noticias</h1>
      <section class="conteiner">
        <?php $titulo = "Notícia 1"; $descricao ="Descrição da Notícia 1";$img="Notícia 1.jpg"; include '../components/noticia.php'; ?>
        <?php $titulo = "Notícia 2"; $descricao = "Descrição da Notícia 2";$img="Notícia 2.jpg"; include '../components/noticia.php'; ?>
        <?php $titulo = "Notícia 3"; $descricao = "Descrição da Notícia 3";$img="Notícia 3.jpg"; include '../components/noticia.php'; ?>
        <?php $titulo = "Notícia 4"; $descricao = "Descrição da Notícia 4";$img="Notícia 4.jpg"; include '../components/noticia.php'; ?>
       <?php $titulo = "Notícia 1"; $descricao = "Descrição da Notícia 5";$img="Notícia 1.jpg"; include '../components/noticia.php'; ?>
      </section>
    </section>
    <section class="conteiner-about">
    </section>
  </main>
  </main>
</body>
</html>