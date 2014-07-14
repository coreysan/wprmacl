<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

<!--Sidebar-Services-->
<aside id="sidebar">
	<div class="services-box">
		<div class="heading"><h3><a href="<?php echo get_permalink(8); ?>" title="<?php echo get_the_title(8); ?>">services for<br> children and youth</a></h3></div>
		<div class="img-frame"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/img-service1.jpg" alt="Image Description"></a></div>
	</div>
	<div class="services-box">
		<div class="heading"><h3><a href="<?php echo get_permalink(9); ?>" title="<?php echo get_the_title(9); ?>">services for adults</a></h3></div>
		<div class="img-frame"><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/img-service2.jpg" alt="Image Description"></a></div>
	</div>
	<div class="link-box">
		<span><a href="#">View our assortment<br> of service areas</a></span>
	</div>
</aside>
