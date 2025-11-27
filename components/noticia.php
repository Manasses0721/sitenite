<link rel="stylesheet" href="noticia.css"> 
<section class="noticia">

    <div class="d-flex gap-4 align-items-center">

    <link rel="stylesheet" href="noticia.css">
    <div class="d-flex gap-4">
        <div class="news-image">
            <img src="../pages/colaborador/uploads/<?php echo htmlspecialchars($foto); ?>" class="img" alt="<?php echo htmlspecialchars($titulo); ?> ">
        </div>
        <article>
            <h1>
                <?php echo htmlspecialchars($titulo); ?>
            </h1>
            <p>
                <?php echo htmlspecialchars($descricao); ?>
            </p>
        </article>
    </div>
    <hr>
</section>