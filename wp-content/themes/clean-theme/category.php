<?php
get_header();
?>

<div id="fh5co-portfolio">
	<?php
	$query = new WP_Query(
		[
			'category_name' => get_theme_mod('clean_home_category')
		]
	);
	?>

	<?php if ( $query->have_posts() ) : $i = 1;
		while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php get_template_part('template-parts/content', 'preview', ['i' => $i]) ?>
			<?php $i ++; endwhile; ?>
			<?php the_posts_pagination(); ?>
	<?php else: ?>
		Post is not exists
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>
<?php
get_footer();
?>
