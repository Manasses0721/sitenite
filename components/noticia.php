<section class="noticia">
    <link rel="stylesheet" href="noticia.css">
    <div class="d-flex gap-4">
        <div class="news-image">
            <img src="../img/simb_nite-removebg-preview_1.svg" class="img" alt="">
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

</section>