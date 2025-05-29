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

  <!--Estilos-->
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->

  <!--Script-->
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="css/style.css">
  <header>
  <div class="container" id="nav-container">
      <?php
        include('navbar.php');
      ?>
  </header>
</head>

<body>
  
  <main>

    <!-- slider -->
   <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/pessoas1.jpg" class="d-block w-100 img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/pessoas2.jpg" class="d-block w-100 img" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./img/pessoas3.jpg" class="d-block w-100 " alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Sobre a empresa -->
    <div id="about-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="main-title">Sobre a Nite</h3>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="img/Img NITE.jpg" alt="Nite">
          </div>
          <div class="col-md-6">
            <h3 class="about-title">Uma empresa que pensa no futuro</h3>
            <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
            <p>Contamos com empresas parceiras que nos ajudam a entregar soluções inovadoras</p>
            <p>Veja outros diferenciais:</p>
            <ul id="about-list">
              <li><i class="fas fa-check"></i> Propostas inovadoras </li>
              <li><i class="fas fa-check"></i> Projetos com ótimos custos</li>
              <li><i class="fas fa-check"></i> Integração com diversos sistemas do mercado</li>
              <li><i class="fas fa-check"></i> Acesso direto a talentos em formação</li>
              <li><i class="fas fa-check"></i> Desenvolvimento com metodologia ágil</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Serviços da empresa -->
    <div id="services-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="main-title">Nossas especialidades</h3>
          </div>
          <div class="col-md-4 service-box">
            <i class="fas fa-mobile-alt"></i>
            <h4>Bolsas</h4>
            <p>Realiza a captação de bolsas de fomento à inovação e empreendedorismo.</p>
          </div>
          <div class="col-md-4 service-box">
            <i class="fas fa-shopping-cart"></i>
            <h4>Eventos</h4>
            <p>Realiza eventos de imersão com aprendizagem baseada em projetos.</p>
          </div>
          <div class="col-md-4 service-box">
            <i class="fas fa-paint-brush"></i>
            <h4>Ecossistema de Inovação</h4>
            <p>Promove a mediação e o desenvolvimento do ecossistema de inovação da IES.</p>
          </div>
          <div class="col-md-4 service-box">
            <i class="fab fa-google"></i>
            <h4>Mentorias e Capacitações</h4>
            <p>Realiza mentorias e capacitações nas áreas de inovação e empreendedorismo.</p>
          </div>
          <div class="col-md-4 service-box">
            <i class="fas fa-hands-helping"></i>
            <h4>Patentes</h4>
            <p>Desenvolve atividades voltadas para a viabilização de patentes.</p>
          </div>
          <div class="col-md-4 service-box">
            <i class="fas fa-server"></i>
            <h4>Mercado</h4>
            <p>Realiza a conexão da IES com o mercado por meio das Ejs e dos agentes de inovação do NITE.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Time -->
    <div id="team-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="main-title">Nossas Empresas</h3>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/edificare.jpg" class="card-img-top" alt="Imagem de Perfil 1">
              <div class="card-body">
                <h5 class="card-title">Edificare</h5>
                <p class="card-text">Curso: Aequitetura e Engenharia Civil</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/fontec.png" class="card-img-top" alt="Imagem de Perfil 2">
              <div class="card-body">
                <h5 class="card-title">Fonotec</h5>
                <p class="card-text">Curso: Fonoaudiologia</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/img seeds.jpg" class="card-img-top" alt="Imagem de Perfil 3">
              <div class="card-body">
                <h5 class="card-title">Seeds</h5>
                <p class="card-text">Curso: Engenharia da Computação</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/img far.jpg" class="card-img-top" alt="Imagem de Perfil 4">
              <div class="card-body">
                <h5 class="card-title">Faro Comunicações</h5>
                <p class="card-text">Curso: Publicidade e Propaganda</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/img psico.jpg" class="card-img-top" alt="Imagem de Perfil 4">
              <div class="card-body">
                <h5 class="card-title">Psiworks</h5>
                <p class="card-text">Curso: Psicologia</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/img valor.jpg" class="card-img-top" alt="Imagem de Perfil 4">
              <div class="card-body">
                <h5 class="card-title">Valor</h5>
                <p class="card-text">Curso: Administração</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Newsletter -->
    <div id="news-area">
      <div class="container">
        <div class="col-md-12">
          <h3 class="main-title">Fique por dentro das novidades</h3>
        </div>
        <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre desenvolvimento de software</p>
        <form action="">
          <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
          <input type="submit" id="news-btn" value="Inscrever">
        </form>
      </div>
    </div>

    </div>
  </main>
  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="main-title">Entre em contato conosco</h3>
          </div>
          <div class="col-md-4 contact-box">
            <i class="fas fa-phone"></i>
            <p><span class="contact-tile">Ligue para:</span> (48)99999-9999</p>
            <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
          </div>
          <div class="col-md-4 contact-box">
            <i class="fas fa-envelope"></i>
            <p><span class="contact-tile">Envie um email:</span> nite123@gmail.com</p>
          </div>
          <div class="col-md-4 contact-box">
            <i class="fas fa-map-marker-alt"></i>
            <p><span class="contact-tile">Venha tomar um café:</span> Rua Anapurus- Renascença</p>
          </div>        
        </div>
      </div>
    </div>

  </footer>
  <!-- Scripts do projeto -->
  <script src="https://kit.fontawesome.com/f11ceb98c0.js" crossorigin="anonymous"></script>
  <!-- Progress Bar-->
  <script src="js/progressbar.min.js"></script>
  <!-- Parallax-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
</body>

</html>