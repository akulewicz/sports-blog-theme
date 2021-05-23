<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="single-post">
            <header class="post__header">
                <?php foreach ((get_the_category()) as $category) : ?>
                    <a class="post__category" href="<?= get_category_link($category->cat_ID); ?>"><?= $category->category_nicename . ' '; ?></a>
                <?php endforeach; ?>
                <h1 class="post__title post__title--big"><?= the_title(); ?></h1>
                <p class="post__date post__date--with-margin"><?= get_the_date(); ?></p>
                <div class="post__image-box">
                    <?php the_post_thumbnail('medium-large', array('class' => 'post__image post__image--featured')) ?>
                </div>
            </header>
            <?= the_content(); ?>
        </article>

    <?php endwhile; ?>
<?php endif; ?>

<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://poruszeni-pl.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>