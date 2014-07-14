<?php
/**
 * The Template for displaying all single posts.
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

<div id="primary">

<div id="postList">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
				<div class="post-nav post-nav-top">
					<div class="prev-post">
					<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title', 'class="testpost"', '5' ); ?>
					</div>
					<div class="next-post">
					<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '', '5'  ); ?>
					</div>
				</div>
			

				<div class="single-post-content">
						
					<h1 class="entry-title entry-title-<?php echo $post_type; ?>"><?php the_title(); ?></h1>
						
						<?php the_content(); ?>
						
						<?php $projects = get_the_terms($post->ID, 'projects'); // LIST ANY ASSOCIATED PROJECTS 
						if(is_array($projects)){
							echo '<div class="project-link">';
							echo '<h3>Recent projects</h3>';
							echo '<p>';
							foreach($projects as $obj){
								$post_thumb = get_that_image($obj->term_id, 'alignleft'); 
								if(strlen($post_thumb)>0)
									echo '<a href="'.get_permalink( $obj->term_id ).'" rel="bookmark" class="floatleft" title="'.$obj->name.'">'.$post_thumb.'</a>';
								echo '<a href="'.get_permalink( $obj->term_id ).'" target="_parent" title="'.$obj->name.'">'.$obj->name.'</a>';
								
							}
							echo '</p>';
							echo '</div>';
						}
						?>


						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
							</a>
<?php endif; ?>
				
					<div class="post-details">
							
						<?php twentyten_posted_in(); ?>
						<?php //edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
					
					</div>
					
			</div><!-- .single-post-content -->
			
			<div class="post-nav post-nav-bottom">
				<div class="prev-post">
					<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title', '5'  ); ?>
				</div>
				<div class="next-post">
					<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '', '5'  ); ?>
				</div>
			</div>
			
			<div class="post-comments">
				<?php comments_template( '', true ); ?>
			</div><!-- post-comments -->

<?php endwhile; // end of the loop. ?>

</div><!-- #postList -->
<!--</div>  #content -->
</div> <!-- #primary -->
</section> <!-- #content -->
</div> <!-- #twocolumns -->

<?php get_sidebar('events'); ?>

<?php get_footer(); ?>