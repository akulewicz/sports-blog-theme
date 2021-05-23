<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="page">
    <header class="page__header">
        <h1 class="post__title post__title--big"><?= the_title(); ?></h1>
        <p class="post__date post__date--with-margin"><?= get_the_date(); ?></p>
    </header>
        <?= the_content(); ?>
</article>

<?php endwhile; ?>
<?php endif; ?>