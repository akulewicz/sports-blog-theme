<aside class="sidebar">
<div class="widget">
        <section class="author">
            <h2 class="widget__title">O mnie</h2>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/author.jpg" alt="" class="author__photo">
            <h3 class="author__name">Arkadiusz Kulewicz</h3>
            <p class="author__description">Autor bloga poruszeni.pl. Wielbiciel podróży oraz wszelkich form aktywności. W wolnych chwilach
                stara się coś kodować, czego rezultatem jest ta strona.</p>
            <div class="social-links">

                <a href="https://www.facebook.com/poruszeni/" aria-label="Facebook"><i
                        class="fab fa-facebook-square social-links__item"></i></a>
                <a href="https://www.youtube.com/user/kulabwo/" aria-label="Youtube"><i
                        class="fab fa-youtube-square social-links__item"></i></a>
                <a href="https://github.com/akulewicz" aria-label="GitHub"><i
                        class="fab fa-github-square social-links__item"></i></a>
                <a href="https://www.strava.com/athletes/5099827" aria-label="Strava"><i
                        class="fab fa-strava social-links__item"></i></a>
            </div>
        </section>
    </div>

    <div class="widget">
    <section class="last-posts">
            <h2 class="widget__title">Najnowsze posty</h2>
            
            <?php 
                $recent_posts = new WP_Query( array( 'posts_per_page' => 5, 'offset' => 1 ) );
            ?>

        

            <?php if ( $recent_posts->have_posts() ) : ?>
            <ul class="last-posts__list">
            <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
            <li class="last-posts__item">
                <?php the_post_thumbnail(array(80, 80), array('class' => 'last-posts__image'));?><a class="last-posts__link" href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a> 
            </li>
 <?php endwhile; ?>
 </ul>
 
<?php endif; ?>
    </div>

 

        </section>


        

    <?php dynamic_sidebar( 'primary_sidebar' ); ?>
            
</aside>
    