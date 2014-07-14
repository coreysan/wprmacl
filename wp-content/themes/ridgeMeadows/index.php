<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

	<!--Twocolumns-->
	<div id="twocolumns" class="floatleft">
		<!--Content-->
		<section id="content" class="twocolumns">
			
			<h1 class="post-heading"><?php echo get_the_title(22); ?></h1>
		
			<?php get_template_part('loop', 'index'); ?>

		</section>
	</div>

	<?php get_sidebar('events'); ?>

<?php get_footer(); ?>