<!-- Barra de navegação -->
  <link rel="stylesheet" href="css/style.css">
    <div class="container" id="nav-container">
      <nav class="navbar shadow-sm navbar-expand-lg fixed-top">
        <!--Logo do NITE-->
            <!-- Imagem para abrir/fechar -->
            <img src="img/simb_nite-removebg-preview_1.svg" alt="Abrir menu" class="menu-icon" onclick="toggleMenu()">
        <!-- Sidebar -->
        <div id="mySidebar" class="sidebar">
          <a href="usuario.php"> Usuário</a>
          <a href="login.php"> Login</a>
        </div>
        <!-- Script -->
        <script>
          function toggleMenu() {
          document.getElementById("mySidebar").classList.toggle("active");
          }
        </script>
        <!--Botão para o menu responsivo-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--links do menu de navegação-->
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
 