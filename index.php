<!-- Pagina inicial -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nite-Núcleo de inovação</title>
  <!-- Fonte -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet"> -->

</head>

<body class="p-8 bg-primary">
  <!-- Navbar -->
  <header>
    <div class="container p-8" id="nav-container">
      <?php
      include('navbar.php');
      ?>
  </header>
  <!-- Troca da parte principal -->
  <main class="">
    <?php
    $trocas = $_GET['trocas'] ?? 'home'; // padrão é "home"
    $arquivo = "trocas/{$trocas}.php";

    if (file_exists($arquivo)) {
      include $arquivo;
    } else {
      echo "<h2>Página não encontrada</h2><p>A página solicitada não existe.</p>";
    }
    ?>
  </main>
  <!-- Rodapé -->
  <footer>
    <?php
    include('footer.php');
    ?>
  </footer>

</body>
<!-- Scripts do projeto -->
<script src="https://kit.fontawesome.com/f11ceb98c0.js" crossorigin="anonymous"></script>
<!-- Progress Bar-->
<script src="js/progressbar.min.js"></script>
<!-- Parallax-->
<!-- <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script> -->
<script src="js/scripts.js"></script>

</html>