<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=(device-width), initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../components/css/style.css">
    <link rel="stylesheet" href="../../components/css/home.css">
    <link rel="stylesheet" href="../../components/css/noticia.css">
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
                <?php $text="Cadastro"; include '../admin/buttonad.php'; ?>
            </div>
        </div>

    </div>
    
<form action="salvarNoticia.php" method="POST" enctype="multipart/form-data">
<div class="col-md-6" id="contact-form">
    <div class="mb-3">
        <label>Título:</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Conteúdo:</label>
        <textarea name="conteudo" class="form-control" rows="5" required></textarea>
    </div>

    <div class="mb-3">
        <label>Foto da notícia:</label>
        <input type="file" name="imagem" class="form-control" accept="image/*" required>
    </div>
    <div class="mb-3">
        <label>Autor:</label>
        <input type="text" name="autor" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Enviar notícia</button>
</div>
</form>
</body>
</html>