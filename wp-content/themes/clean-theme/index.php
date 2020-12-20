<?php
get_header();
?>
<div id="fh5co-portfolio">
	<?php

	if(have_posts()):

		while (have_posts()):
			the_post();

			the_title();
			the_content();
			the_permalink();

		endwhile;

	endif;
?>
</div>
<?php
get_footer();
?>
