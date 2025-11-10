<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nite-Núcleo de Inovação</title>

  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />

  <!-- Estilo próprio -->
  <link rel="stylesheet" href="css/pages.css" />
</head>

<body>

  <!-- Cabeçalho -->
  <header>
    <div class="container" id="nav-container">
      <nav class="navbar shadow-sm navbar-expand-lg fixed-top">
        <!-- Logo do NITE -->
        <a href="#" class="navbar-brand">
          <img id="logo" src="img/simb_nite-removebg-preview_1.svg" alt="Nite" />
        </a>

        <!-- Botão menu responsivo -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-links"
          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links do menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a href="index.php" class="nav-item nav-link" id="home-menu">Home</a>
            <a href="empresas.php" class="nav-item nav-link active" id="about-menu">Empresas</a>
            <a href="pages.php" class="nav-item nav-link" id="news-menu">Notícias</a>
            <a href="#portfolio-area" class="nav-item nav-link" id="portifolio-menu">Projetos</a>
            <a href="contato.php" class="nav-item nav-link" id="contact-menu">Contato</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- Conteúdo principal pode ir aqui -->
<?php
  require('conexao.php');
?>

<div class="card-header">
    <h4>
         Lista de Funcionários
        <a class="btn btn-primary" >Novo Funcionário</a>
    </h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>email</th>
            </tr>
        </thead>
        <?php
            $sql = "SELECT nome,email FROM dbnite.tbusuarios";

            $res = $conn->query($sql);

            $qtd = $res->num_rows;

            if($qtd > 0){
                while($row = $res->fetch_object()){
                  ?>
                                    <tr>
                        <td><?=$row->nome?></td>     
                        <td><?=$row->email?></td>
                        <td>
                            <a href="?page=dependente-listar&id=<?=$row->idtbUsuario?>" class="btn btn-secondary btn-sm">
                                <span class="bi-eye-fill"></span>
                                &nbsp;Dependente
                            </a>
                            <a href="?page=funcionario-editar&id=<?=$row->idtbUsuario?>" class="btn btn-success btn-sm">
                                <span class="bi-pencil-fill"></span>
                                &nbsp;Editar
                            </a>
                            <form action="acoes.php" method="POST" class="d-inline">
                                <button onclick="return confirm('Tem certeza que deseja excluir?')" 
                                    type="submit" name="delete_funcionario" 
                                    value="<?=$row->idtbUsuario?>" class="btn btn-danger btn-sm">
                                <span class="bi-trash3-fill"></span>&nbsp;Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>
<!-- Rodapé -->
  <footer class="mt-5 pt-5">
    <div id="copy-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6" id="msg-box">
            <p>Nos deixe uma mensagem:</p>
          </div>

          <div class="col-md-6" id="contact-form">
              <form action="salvar_mensagem.php" method="POST">
              <input type="email" class="form-control mb-2" placeholder="E-mail" name="email" required />
              <input type="text" class="form-control mb-2" placeholder="Assunto" name="subject" required />
              <textarea class="form-control mb-2" rows="3" placeholder="Sua mensagem..." name="message" required></textarea>
              <input type="submit" class="btn btn-primary" value="Enviar" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kQtW33rZJAHjgefvhyyzcGFzZ6QX4pN5y0K3sfqMdKXkLGUemivD5Z9AzHJHgI67"
    crossorigin="anonymous"></script>
</body>
</html>
