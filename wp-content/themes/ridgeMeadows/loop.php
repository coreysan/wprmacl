<?php
/*
 */
?>

<div id="primary">

<div id="postList">
	
<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<div class="post-nav post-nav-top">
			<div class="prev-post">
				<?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?>
			</div>
			<div class="next-post">
				<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?>
			</div>
		</div>	
				
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
		<?php get_search_form(); ?>

<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>

<?php $is_home = is_home(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="single-post-content bottom-border is-<?php echo $is_home; ?>">
	
<?php /* How to display posts in the Gallery category. */ ?>

	<?php if ( in_category( _x('gallery', 'gallery category slug', 'twentyten') ) ) : ?>
			<h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php twentyten_posted_on(); ?>

<?php // PASSWORD PROTECTED ?>
<?php if ( post_password_required() ) : ?>
				<?php the_excerpt(); ?>
<?php else : ?>
<?php
	$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
	$total_images = count( $images );
	$image = array_shift( $images );
	$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
?>
					<a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>

				<p><?php printf( __( 'This gallery contains <a %1$s>%2$s photos</a>.', 'twentyten' ),
						'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
						$total_images
					); ?></p>

				<?php the_excerpt(); ?>
<?php endif; ?>

				<a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'twentyten'), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'twentyten' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a>
				|
				<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ), NONE, '' ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '|', '' ); ?>

<?php /* How to display posts in the asides category */ ?>

	<?php elseif ( in_category( _x('asides', 'asides category slug', 'twentyten') ) ) : ?>

		<?php if ( $is_home == 1): // Display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>
		<?php elseif ( is_archive() || is_search() || is_home()) : // Display excerpts for archives and search. ?>
			<?php the_excerpt(); ?>
		<?php else : ?>
			<?php the_content( __( 'Continue reading &rarr;', 'twentyten' ) ); ?>
		<?php endif; ?>
			
			<div class="post-details">
				
				<?php twentyten_posted_on(); ?>
				|
				<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ), NONE, '' ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '| ', '' ); ?>
			
			</div><!-- .post-details -->
			
<?php 

/* ALL POSTS */ 

?>

	<?php else : ?>

			<h1 class="post-heading entry-title-<?php echo the_ID(); ?>"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="post-details" style="display:none;">
			<?php twentyten_posted_on(); ?>
		</div>
	<?php if ( is_archive() || is_search() || $is_home == 1) : // Only display excerpts for archives and search. ?>
		<?php the_excerpt(); ?>
	<?php else : ?>
			<?php the_content( __( 'Continue reading &rarr;', 'twentyten' ) ); ?>
			<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
	<?php endif; ?>
				
			<div class="post-details">
					
				<?php if ( count( get_the_category() ) ) : ?>
					<?php printf( __( 'Posted in %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
					|
				<?php endif; ?>
				<?php
					$tags_list = get_the_tag_list( '', ', ' );
					if ( $tags_list ):
				?>
					<?php printf( __( 'Tagged %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
					|
				<?php endif; ?>
				<?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ), NONE, '' ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '| ', '' ); ?>
				
			</div><!-- .post-details -->
				
		<?php comments_template( '', true ); ?>

	<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>

</div><!-- .single_post -->

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<div class="post-nav post-nav-bottom">
			<div class="prev-post">
				<?php next_posts_link( __( '&larr; Older posts', 'twentyten'  ) ); ?>
			</div>
			<div class="next-post">
				<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten'  ) ); ?>
			</div>
		</div>
<?php endif; ?>

</div> <!-- #postList -->
<!--</div>  #content -->
</div> <!-- #primary -->