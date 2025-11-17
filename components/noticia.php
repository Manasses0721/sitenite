<section class="noticia">
    <div class="d-flex gap-4 align-items-center">
        <div class="news-image">
            <img src="../img/<?php echo htmlspecialchars($titulo); ?>.jpg" class="img" alt="<?php echo htmlspecialchars($titulo); ?>">
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