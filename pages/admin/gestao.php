<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestao</title>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../components/css/style.css">
    <link rel="stylesheet" href="../components/css/home.css">
    <link rel="stylesheet" href="../components/noticia.css">
</head>
<body>

    <div class="w-full px-4 shadow bg-transparent blur-5 d-flex justify-content-between rounded" id="navbar-links">
         <div class=" d-flex gap-2 align-items-center" style="width: 80px; height: 80px;">
            <img src="../../img/simb_nite-removebg-preview_1.svg" alt="Abrir menu" class="w-100 h-auto" onclick="toggleMenu()">
            <nav class="d-flex gap-2 align-items-center text-white">
                <a href="../index.php" class="nav-item nav-link  text-info" id="home-menu">Home</a>
                <a href="../empresas.php" class="nav-item nav-link text-info" id="about-menu">Empresas</a>
                <a href="gestusuario.php" class="nav-item nav-link text-info" id="news-menu">usuario</a>
            </nav>
        </div>

        <div class=" d-flex align-items-center gap-4 p-4 " id="nav-container">
            <div class="d-flex gap-3 align-items-center">
                <a href="../../pages/login.php" class="text-primary" id="login-menu">Entrar</a>
                <?php $text="Cadastro"; include 'buttonad.php'; ?>
            </div>
        </div>

    </div>
    
</body>
</html>