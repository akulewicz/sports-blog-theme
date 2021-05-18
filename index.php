<?php get_header() ?>
    <div class="container">
        <main class="main">
            
                <?php get_template_part('content'); ?>
              
               
            <?php the_posts_pagination(array( 'screen_reader_text'=> ' ')); ?>
        </main>
  
<?php get_footer() ?>
        
    