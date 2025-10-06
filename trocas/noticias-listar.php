<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Notícias</title>
  <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

  <!-- Cabeçalho -->
  <header>
   <link rel="stylesheet" href="css/style.css">
<header >
  <div class="container" id="nav-container">
    <nav class="navbar shadow-sm navbar-expand-lg fixed-top">
      <a href="#" class="navbar-brand">
        <img id="logo" src="img\simbnite.jpg" alt="Nite">
        <p>Noticias Nite</p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>

      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
        <div class="navbar-nav">
          <a href="trocas/noticias-listar.php" class="nav-item nav-link" id="home-menu">Home</a>
          <a href="#team-area" class="nav-item nav-link" id="about-menu">Empresas</a>
          <a href="#news-area" class="nav-item nav-link" id="news-menu">Notícias</a>
          <a href="#portfolio-area" class="nav-item nav-link" id="portifolio-menu">Projetos</a>
          <a href="#contact-area" class="nav-item nav-link" id="contact-menu">Contato</a>
        </div>
      </div>
    </nav>
  </div>  
</header>
  </header>

   <!-- Seção de notícias -->
  <main class="max-w-6xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-semibold border-b-2 border-yellow-400 pb-2 mb-6">Últimas Notícias</h2>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <!-- Card de notícia -->
      <div class="bg-white border border-gray-200 rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
        <img src="./img/edificare.jpg" alt="Notícia 1" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-bold text-blue-700">Título da Notícia 1</h3>
          <p class="text-gray-700 mt-2">Resumo da notícia em algumas linhas para dar uma prévia ao leitor...</p>
          <a href="#" class="inline-block mt-4 text-yellow-500 font-semibold hover:underline">Leia mais →</a>
        </div>
      </div>

      <!-- Repita os cards abaixo -->
      <div class="bg-white border border-gray-200 rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
        <img src="https://via.placeholder.com/600x300" alt="Notícia 2" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-bold text-blue-700">Título da Notícia 2</h3>
          <p class="text-gray-700 mt-2">Outro resumo interessante para engajar o visitante...</p>
          <a href="#" class="inline-block mt-4 text-yellow-500 font-semibold hover:underline">Leia mais →</a>
        </div>
      </div>

      <!-- Mais cards... -->
    </div>
  </main>
</body>
</html>

