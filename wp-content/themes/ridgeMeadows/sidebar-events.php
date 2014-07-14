<?php
/**
 *  Events/Blog Sidebar
 */
?>

<?php 
	$posts_page = get_option('page_for_posts', true);
	$children = wp_list_pages("title_li=&child_of=". $posts_page ."&echo=0&depth=1");
?>

<!--Sidebar-About-->
<aside class="aside aside-gen">
	
	<h3><a href="<?php echo get_permalink($parent); ?>" title="<?php echo get_the_title($parent); ?>"><span><?php echo get_the_title( $posts_page ); ?></span></a></h3>
	<div class="general-block">
		
		<?php
		if ($children) { ?>
		<ul id="subnav">
		<?php echo $children; ?>
		</ul>
		<?php } ?>

	</div>

	<ul>
	<?php //dynamic_sidebar( 'primary-widget-area' ); ?>
	</ul>

	
</aside>
