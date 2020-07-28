<?php get_header(); ?>
<div class='content'>


    <article id="post-404">

        <h2><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'business'); ?></h2>
        <h3><?php esc_html_e('404 Error', 'fullbase'); ?></h3>

    </article>

    <div>
        <?php (dynamic_sidebar('sidebar-area')); ?>
    </div>

</div>
<?php get_footer(); ?>