<?php
/**
 * Template Name: Global Inside Layout
 */

get_header(); ?>
	
		<!--Twocolumns-->
		<div id="twocolumns" class="floatleft">
			<!--Content-->
			<section id="content" class="twocolumns">
				
			<?php get_template_part('loop'); ?>

			</section>
		</div>

		<?php get_sidebar('global'); ?>

<?php get_footer(); ?>