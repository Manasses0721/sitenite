 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
     rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   <link rel="stylesheet" href="../components/css/style.css">
   <link rel="stylesheet" href="../components/css/home.css">
    <link rel="stylesheet" href="../components/css/empresa.css">
   <div class="container" id="nav-container">
 </head>
 <body>
   <main class="min-h-screen flex flex-col p-4 ">
     <?php include '../components/navbar.php'; ?>
     <!--Link para o arquivo de estilo próprio do projeto-->
     <header>
       <!--Botão para o menu responsivo-->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
         aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>

       </button>
     </header>
     <div class="container my-5">
       <div class="section d-flex w-100 gap-4">
         <!--Edificare-->
        <?php  $nome="Edificare";include '../components/empresa.php'; ?>
       <!--Seeds-->
        <?php  $nome="Seeds";include '../components/empresa.php'; ?>
        
        <?php $nome="Fonatec";include '../components/empresa.php'; ?>

        <?php $nome="Faro";include '../components/empresa.php'; ?>

        <?php $nome="Valor";include '../components/empresa.php'; ?>

        <?php $nome="Psico";include '../components/empresa.php'; ?>
       </div>
     </div>
     </div>
     </div>
   </main>
 </body>
 </html>