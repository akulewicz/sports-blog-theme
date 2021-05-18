<article class="single-post">
    <header class="post__header">
        <h2 class="post__title post__title--big"><?= the_title(); ?></h2>
        <p class="post__date post__date--with-margin"><?= get_the_date(); ?></p>
    </header>
        <?= the_content(); ?>
</article>