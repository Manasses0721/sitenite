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
  <link rel="stylesheet" href="css/pages.css">
</head>
<body>
     <!-- Início do cabeçalho com a barra de navegação -->
  <header>
    <div class="container" id="nav-container">
      <nav class="navbar shadow-sm navbar-expand-lg fixed-top">
        
        <!-- Logo do NITE -->
        <a href="#" class="navbar-brand">
          <img id="logo" src="img/simb_nite-removebg-preview_1.svg" alt="Nite">
        </a>

        <!-- Botão hamburguer para menu responsivo -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links do menu de navegação -->
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link" id="home-menu">Home</a>
            <a href="empresas.php" class="nav-item nav-link" id="about-menu">Empresas</a>
            <a href="pages.php" class="nav-item nav-link" id="news-menu">Notícias</a>
            <a href="#portfolio-area" class="nav-item nav-link" id="portifolio-menu">Projetos</a>
            <a href="contato.php" class="nav-item nav-link" id="contact-menu">Contato</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- Corpo -->
  <main>
  <section id="noticias">
    <div class="container">   
      <div class="cards-noticias">
        <!-- Notícia 1 -->
        <div class="card">
          <img id="noticia1" src="img/pessoas1.jpg" alt="Projeto de Empresa Júnior">
          <div class="conteudo">
            <h2>Projeto de Impacto da EJ Engenharia+</h2>
            <p>A EJ Engenharia+ desenvolveu um sistema de irrigação inteligente para produtores locais, promovendo sustentabilidade e inovação.</p>
            <a href="#">Leia mais</a>
          </div>
        </div>

        <!-- Notícia 2 -->
        <div class="card">
          <img id="noticia2" src="img/pessoas2.jpg" alt="Mentoria do NITE">
          <div class="conteudo">
            <h2>Mentoria NITE impulsiona Startups Universitárias</h2>
            <p>O NITE realizou um programa de mentoria com foco em inovação tecnológica, apoiando 10 startups formadas por estudantes.</p>
            <a href="#">Leia mais</a>
          </div>
        </div>

        <!-- Notícia 3 -->
        <div class="card">
          <img id="noticia3"src="img/pessoas3.jpg" alt="Software desenvolvido">
          <div class="conteudo">
            <h2>EJ CodeLab lança app para gestão de eventos</h2>
            <p>Um aplicativo completo para gerenciamento de eventos universitários foi lançado pela CodeLab, com apoio do NITE.</p>
            <a href="#">Leia mais</a>
          </div>
        </div>

      </div>
    </div>
  </section>
</body>
</html>
