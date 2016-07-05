<?php
/**
 *  Global Sidebar
 */
?>

<!--Sidebar-About-->
<aside class="aside aside-gen">
	
	<?php

		if ($post->post_parent)	{
			$ancestors=get_post_ancestors($post->ID);
			$root=count($ancestors)-1;
			$parent = $ancestors[$root];
		} else {
			$parent = $post->ID;
		}

		$children = wp_list_pages("title_li=&child_of=". $parent ."&echo=0&depth=2");
	?>

	<h3><a href="<?php echo get_permalink($parent); ?>" title="<?php echo get_the_title($parent); ?>"><span><?php echo get_the_title($parent); ?></span></a></h3>
	<div class="general-block">
		
		<?php
		if ($children) { ?>
		<ul id="subnav">
		<?php echo $children; ?>
		</ul>
		<?php } ?>
	<script type="text/javascript">

		jQuery('ul#subnav li').each(function(){
// 			debugger;

			if(jQuery(this).text() == 'Residential Services')
			{
// 				jQuery(this).append('');
				jQuery(this).append('<ul><li><a href="/adult-services/residential-services#home-sharing">Home Sharing</a></li><li><a href="/adult-services/residential-services#supported-living">Supported Living</a></li><li><a href="/adult-services/residential-services#group-homes">Group Homes</a></li><li><a href="/adult-services/residential-services#cluster-subsidized">Cluster & Subsidized Homes</a></li><li><a href="/adult-services/residential-services#getting-access">How to Access these Programs</a></li></ul>');
// 				jQuery(this).append('');
			}	
			
			console.log(this);
		});

	</script>
	</div>
	
</aside>
