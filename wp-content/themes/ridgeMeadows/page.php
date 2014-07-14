<?php
/**
 * Default
 */

get_header(); ?>
	
		<?php get_sidebar(); ?>

		<!--Twocolumns-->
		<div id="twocolumns">
			<!--Content-->
			<section id="content">
				
				<?php get_template_part('loop'); ?>

			</section>
			
			<?php get_sidebar('business'); ?>

		</div>

<?php get_footer(); ?>