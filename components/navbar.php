<link rel="stylesheet" href="css/style.css">

<div class="w-full px-4 shadow bg-transparent blur-5 d-flex justify-content-between rounded" id="navbar-links">
  <div class=" d-flex gap-2 align-items-center" style="width: 80px; height: 80px;">
    <img src="../img/simb_nite-removebg-preview_1.svg" alt="Abrir menu" class="w-100 h-auto" onclick="toggleMenu()">
    <nav class="d-flex gap-2 align-items-center text-white">
      <a href="index.php" class="nav-item nav-link  text-info" id="home-menu">Home</a>
      <a href="empresas.php" class="nav-item nav-link text-info" id="about-menu">Empresas</a>
      <a href="pages.php" class="nav-item nav-link text-info" id="news-menu">Notícias</a>
    </nav>
  </div>

  <div class=" d-flex align-items-center gap-4 p-4 " id="nav-container">

    <div class="d-flex gap-3 align-items-center">
      <a href="../pages/login.php" class="text-primary" id="login-menu">Entrar</a>
      <?php $text="cadastro"; $src="../pages/cadastrar.php"; include 'button.php'; ?>
    </div>
  </div>

</div>