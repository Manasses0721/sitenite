<!-- Pagina inicial -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nite-Núcleo de inovação</title>
  <!-- Fonte -->

  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../components/css/style.css">
    <link rel="stylesheet" href="../components/css/home.css">
    <link rel="stylesheet" href="../components/noticia.css">
</head>

<body>
  <main class="min-h-screen flex flex-col p-4 ">
    <?php include '../components/navbar.php'; ?>
    <!-- Conteúdo da página -->
    <main>
      <div style="width: 100%; height:400px; background-color: #D0D0D08F;">
        NITE
      </div>
      <section class="grid-section">
        <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div>
      </section>
      <section class="latest-news">
        <h1>Ultimas noticias</h1>
        <section class="conteiner">
          <?php  $titulo="Notícia 1" ; $descricao="Descrição da Notícia 1"; include '../components/noticia.php'; ?>
          <?php  $titulo="Notícia 2" ; $descricao="Descrição da Notícia 2"; include '../components/noticia.php'; ?>
          <?php  $titulo="Notícia 3" ; $descricao="Descrição da Notícia 3"; include '../components/noticia.php'; ?>
          <?php  $titulo="Notícia 4" ; $descricao="Descrição da Notícia 4"; include '../components/noticia.php'; ?>
        </section>
      </section>
    </main>
    <section class="conteiner-about">
      <h2>Sobre nós</h2>
      <div class="d-flex mt-4 gap-4">
        <figcaption>
          <div class="fig">
          </div>
        </figcaption>
        <aside>
          <div>
            <h3>Uma empresa que pensa no futuro</h3>
            <p>
              Uma empresa que pensa no futuro
              Nossos projetos são adaptados ao cliente e seu propósito.
              Contamos com empresas parceiras que nos ajudam a entregar soluções inovadoras
            </p>
            <h5>
              Veja outros diferenciais:
            </h5>
            <ul>
              <li> Propostas inovadoras</li>
              <li> Projetos com ótimos custos</li>
              <li> Integração com diversos sistemas do mercado</li>
              <li> Acesso direto a talentos em formação</li>
              <li> Desenvolvimento com metodologia ágil</li>
            </ul>
          </div>
        </aside>
    </section>
    </div>

  </main>
</body>
<script src="https://kit.fontawesome.com/f11ceb98c0.js" crossorigin="anonymous"></script>
<!-- Progress Bar-->
<script src="js/progressbar.min.js"></script>
<!-- Parallax-->
<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
  crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>

</html>