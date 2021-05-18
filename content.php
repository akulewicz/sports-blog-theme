<div class="posts">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <article class="post">
        <header class="post__header">
            <div class="post__image-box">
                <?php the_post_thumbnail('medium-large', array( 'class' => 'post__image post__image--featured' )) ?>
            </div>
            <?php foreach((get_the_category()) as $category): ?>
            <a class="post__category"
                href="<?= get_category_link($category->cat_ID); ?>"><?= $category->category_nicename . ' '; ?></a>
            <?php endforeach; ?>
            <h2 class="post__title"><a class="post__link" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
            <p class="post__date"><?= get_the_date(); ?></p>
        </header>
        <?= the_excerpt(); ?>
    </article>

    <?php endwhile; ?>
    <?php endif; ?>
</div>