 <!DOCTYPE html>
 <html lang="pt-BR">

 <head>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
     rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   <link rel="stylesheet" href="../components/css/style.css">
   <link rel="stylesheet" href="../components/css/home.css">
   <link rel="stylesheet" href="../components/noticia.css">
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
       <div class="row g-4">
         <!--Edificare-->
         <div class=" col-12 col-md-6">
           <div class="card p-3 text-center d-flex" style="height: 362px; width: 491px;">

             <img src="img/edificare.jpg" class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title">Edificare </h5>
               <p class="card-text">Texto ou descrição.</p>
             </div>
           </div>
         </div>
       </div>
       <!--Seeds-->
       <div class=" col-12 col-md-6">
         <div class="card p-3 text-center d-flex" style="height: 362px; width: 491px;">
           <img src="img.img/edificio.jpg" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">Seeds</h5>
             <p class="card-text">Texto ou descrição.</p>
           </div>
         </div>
       </div>
     </div>
     <!--Faro-->
     <div class=" col-12 col-md-6">
       <div class="card p-3 text-center d-flex" style="height: 362px; width: 491px;">
         <img src="img.img/edificio.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Faro
           </h5>
           <p class="card-text">Texto ou descrição.</p>
         </div>
       </div>
     </div>
     <!--Fonatec-->
     <div class=" col-12 col-md-6">
       <div class="card p-3 text-center d-flex" style="height: 362px; width: 491px;">
         <img src="img.img/edificio.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Fonatec</h5>
           <p class="card-text">Texto ou descrição.</p>
         </div>
       </div>
     </div>
     <!--Valor-->
     <div class=" col-12 col-md-6">
       <div class="card p-3 text-center d-flex" style="height: 362px; width: 491px;">
         <img src="img.img/edificio.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Valor</h5>
           <p class="card-text">Texto ou descrição.</p>
         </div>
       </div>
     </div>
     <!--Psico-->
     <div class=" col-12 col-md-6">
       <div class="card p-3 text-center d-flex" style="height: 362px; width: 491px;">
         <img src="img.img/edificio.jpg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Psico</h5>
           <p class="card-text">Texto ou descrição.</p>
         </div>
       </div>
     </div>
     </div>
     </div>
   </main>
 </body>
 </html>