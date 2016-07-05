<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/f020b0f1-bbb8-44cf-bd4f-eeb8385af57a.css"/><!-- sanco fonts.com account -->
	<!--<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/8c57c865-79e8-4456-9a63-800a24809785.css"/> from previous web host -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/print.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/ie.css" media="screen"/><![endif]-->
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/html5.js"></script>
	<!--[if gte IE 9]>
	  <style type="text/css">
		#nav ul li.news, #nav ul li.services, #nav ul li.business, #nav ul li.training, .aside h3, .business-block, .link-box, .services-box h3 {
		   filter: none; 
		}
	  </style>
	<![endif]-->
<?php
	// get top parent
	$parents = get_post_ancestors( $post->ID  );
	if($parents) $topparent = 'page-id-'.$parents[count($parents)-1];
	else $topparent = 'blank';

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );	
	wp_head();
	$post_type = get_post_type( $post->ID ); // GET POST-TYPE, USE FOR HEADER IMAGE SETTING

	global $wp_query; 
	$post_page_id = $wp_query->get_queried_object_id(); // GET ID OF POST PAGE
?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.retina.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$('.logo img').retina();
    		$('.visual img').retina();
		});
	</script>
</head>

<body <?php body_class($topparent); ?>>
<noscript>Javascript must be enabled for the correct page display</noscript>

<!--Wrapper-->
<div id="wrapper">
	<!--Header-->
	<header id="header">
		<div class="header-holder">
			<!--Logo-->
			<div id="printLogo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_print.png"></div>
			<h1 class="logo vcard"><a href="<?php echo home_url(); ?>" title="<?php echo bloginfo('the_title'); ?>" class="fn org url">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" title="<?php wp_title(); ?>" data-retina="<?php echo get_template_directory_uri(); ?>/images/logo_retina.png" width="286" height="104">
				<span>Ridge Meadows Association for Community Living</span>
			</a></h1>
			<div class="header-right"> 
		      <!--Top Links-->
		      <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class' => 'top-links', 'menu'=>'top', 'link_before'=>'', 'link_after'=>'', 'depth'=>1)); ?>
		      <div id="top-right-ad-btn">
		      	<a href="http://rmacl.org/run-walkn-roll-rmacls-3rd-annual/"></a>
		      </div>
		      <div class="slogan">building futures, changing lives</div> 
		    </div><!-- header-right -->
			<!--Nav-->
			<nav id="nav">
				<?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class' => '', 'menu'=>'main', 'link_before'=>'', 'link_after'=>'', 'depth'=>1)); ?>
			</nav>
		</div>
	</header>
	<!--Main-->
	<div id="main">
		<?php // SHOW DEFAULT BANNER IF CURRENT PAGE DOES NOT HAVE A POST-THUMBNAIL
		$page_for_posts = get_option('page_for_posts');
		global $wp_query;
		if ( 
			(has_post_thumbnail( $page_for_posts ) &&
			!has_post_thumbnail() &&
			( $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page_for_posts ), 'post-thumbnail' ) ) &&
			$image[1] >= HEADER_IMAGE_WIDTH ) || 
			$post_page_id == $page_for_posts ||
			is_single($post->ID)
			){ ?>
			<div id="banner">
				<?php echo get_the_post_thumbnail( $page_for_posts, 'post-thumbnail', array('alt'=>get_bloginfo('name') ) ); ?>
			</div>
		<?php }
		?>
		<?php // DISPLAY PAGE FEATURED IMAGE IF EXISTS AND IF NOT A POST PAGE OR IS THE POSTS PAGE (DON'T PRINT EVENT BANNERS)
    	if( !is_single($post->ID) && $post_page_id != $page_for_posts && has_post_thumbnail() ){ ?>
    	<!--Thumbnails-->
		<div id="banner">
		<?php	$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$url = $thumbnail['0'];
			echo '<img src="'.$url.'" alt="'.get_the_title().'">'; ?>
		</div>
		<?php } ?>
		
		<div id="breadcrumbs"><?php my_breadcrumb(); ?></div>	
		<div class="container">
