<?php get_header(); ?>

<div class='content'>
	<div>
		<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

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