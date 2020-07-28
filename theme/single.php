<?php get_header(); ?>
<div class='content'>
    <div>

        <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h1><?php the_title(); ?></h1>

            <p> <?php the_time('j M , Y') ?> - <?php the_category(', '); ?></p>



            <?php the_content(); ?>

            <?php $post_tags = wp_get_post_tags($post->ID);
                                        if (!empty($post_tags)) { ?>
                <p> <small> <strong><?php esc_html_e('Tag: ', 'business'); ?></strong> </small> <br /> <?php the_tags('', ' ', ''); ?></p>
            <?php } ?>


            <div>
                <?php comments_template(); ?>
            </div>

        </article>

    <?php endwhile;
                                else : ?>

    <h3> <?php esc_html_e('Sorry, no posts matched your criteria.', 'business'); ?> </h3>

<?php endif; ?>
    </div>


    <div>
        <?php (dynamic_sidebar('sidebar-area')); ?>
    </div>

</div>

<?php get_footer(); ?>