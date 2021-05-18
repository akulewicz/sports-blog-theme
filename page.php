<?php get_header() ?>
<div class="container">
    <div class="page-with-sidebar">
        <main class="main">
            <?php get_template_part('content', 'post'); ?>
        </main>
        <?php get_sidebar();?>
    </div>

<?php get_footer() ?>