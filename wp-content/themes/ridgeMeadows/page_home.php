<?php
/**
 * Template Name: Home Page
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php bloginfo('name'); ?> <?php wp_title(); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/8c57c865-79e8-4456-9a63-800a24809785.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri(); ?>/print.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 8]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/ie.css" media="screen"/><![endif]-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<!--[if gte IE 9]>
	  <style type="text/css">
		#nav ul li.news, #nav ul li.services, #nav ul li.business, #nav ul li.training, .aside h3, .business-block, .link-box, .services-box h3 {
		   filter: none; 
		}
	  </style>
	<![endif]-->
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );	
	wp_head();
	$post_type = get_post_type( $post->ID ); // GET POST-TYPE, USE FOR HEADER IMAGE SETTING
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.retina.js"></script>
<script>
    jQuery(document).ready(function ($) {
      $('.logo img').retina();
      $('.visual img').retina();
    });
</script>
</head>

<body <?php body_class(); ?>>
<noscript>
Javascript must be enabled for the correct page display
</noscript>

<!--Wrapper-->
<div id="wrapper">
<!--Header-->
<div id="header">
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
</div>
<!--Main-->
<div id="main">
<div class="container_12">
<div class="grid_8 toprow">
  <?php the_post(); ?>
  <?php the_content(); ?>
</div>
<div class="grid_4 toprow newswrapper">
  <h1 class="newsroll"><span>What's New at RMACL</span></h1>
  
  <?php /*
  <!-- homeshare edits -->
  <div class="post-fp">
    <div class="thumbnail">
      <a href="<?php echo home_url(); ?>/adult-services/residential-services/">
      <img height="64" width="64" src="http://rmacl.org/rmacl/wp-content/uploads/Happy-House1.jpg" />
      </a>
    </div>
    <div class="excerpt">
      <h1><a href="<?php echo home_url(); ?>/adult-services/residential-services/">Home Sharing</a></h1>
      <a href="<?php echo home_url(); ?>/adult-services/residential-services/">A rewarding experience for everyone</a>
    </div>
  </div>
  <?php /**/ ?>
  
  <?php query_posts( array ( 'category_name' => 'front-page-news', 'posts_per_page' => 3, 'order' => 'ASC' ) );
global $more;
$more = 0;
while (have_posts()) : the_post();?>
  <div class="post-fp">
    <div class="thumbnail">
      <?php if ( has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
      <?php the_post_thumbnail(array(64,64)); ?>
      </a>
      <?php endif; ?>
    </div>
    <div class="excerpt">
      <h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_title(); ?></a></h1>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_excerpt(); ?></a>
    </div>
  </div>
  <?php endwhile;?>
  <?php ?>
  	<div class="newsbuttons">
  		<a href="<?php echo get_permalink(22); ?>" title="<?php echo get_the_title(22); ?>" class="button">More News</a>
  		<a href="<?php echo get_permalink(970); ?>" title="<?php echo get_the_title(970); ?>" class="button">Our Surveys</a>
	</div>
    <?php /**/?>
  </div>
<div class="clear"></div>
<div class="grid_8 ">
  <div class="grid_4 alpha smallrow">
    <div class="heading-fp">
      <h3><a href="<?php echo get_permalink(8); ?>" title="<?php echo get_the_title(8); ?>">services for<br>
        children and youth</a></h3>
    </div>
    <div class="img-frame"><a href="<?php echo get_permalink(8); ?>" title="<?php echo get_the_title(8); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/clapping.jpg" alt="<?php echo get_the_title(8); ?>"></a></div>
  </div>
  <div class="grid_4 omega smallrow">
    <div class="heading-fp">
      <h3><a href="<?php echo get_permalink(9); ?>" title="<?php echo get_the_title(9); ?>">services for adults</a></h3>
      </div>
    <div class="img-frame"><a href="<?php echo get_permalink(9); ?>" title="<?php echo get_the_title(9); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/fireplace.jpg" alt="<?php echo get_the_title(9); ?>"></a></div>
  </div>
  <!-- end .grid_5.omega -->
  <div class="clear"></div>
  <div class="alpha smallrow ourbusinesses">
    <div class="businesses-fp">
      <h1>our<br/>
        <span>businesses</span></h1>
    </div>
    <div class="bizwrapper">
      <ul class="businesslist">
        <li><a href="<?php echo get_permalink(123); ?>" title="<?php echo get_the_title(123); ?>"><?php echo get_the_title(123); ?></a></li>
        <li><a href="<?php echo get_permalink(125); ?>" title="<?php echo get_the_title(125); ?>"><?php echo get_the_title(125); ?></a></li>
        <li><a href="<?php echo get_permalink(128); ?>" title="<?php echo get_the_title(128); ?>">Vicuna <br>Art Studio</a></li>
        <li><a href="<?php echo get_permalink(130); ?>" title="<?php echo get_the_title(130); ?>">Kingston <br>Business Centre</a></li>
        <li><a href="<?php echo get_permalink(132); ?>" title="<?php echo get_the_title(132); ?>"><?php echo get_the_title(132); ?></a></li
        >
      </ul>
      <br />
    </div>
  </div>
</div>
<!-- end .grid_8.push_8 -->
<div class="grid_4">
 
  <div class="grid_4 smallrow rightside home-sharing">
    <div class="heading-fp wide ">
      <h3>
      	<a 	href="/adult-services/residential-services/" 
      		title="<?php echo get_the_title(67); ?>">
      		interested in becoming a<br>
			<b>home sharing provider?</b>
		</a>
	  </h3>
    </div>
      <div class="img-frame">
      	<a href="<?php echo get_permalink(67); ?>" title="<?php echo get_the_title(67); ?>">
      		<img src="<?php bloginfo( 'template_directory' ); ?>/images/home-sharing.jpg" alt="<?php echo get_the_title(67); ?>"
      				width="320">
      	</a>
      </div>
  </div>
  
  <div class="grid_4 smallrow rightside">
    <div class="heading-fp wide">
		<h3><a href="<?php echo get_permalink(67); ?>" title="<?php echo get_the_title(67); ?>">read about our<br/>
        <b>support for families</b></a></h3>
	</div>
      <div class="img-frame"><a href="<?php echo get_permalink(67); ?>" title="<?php echo get_the_title(67); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/familysupport.jpg" alt="<?php echo get_the_title(67); ?>"></a></div>
  </div>
  
  <?php /* ?>
  <!-- end .grid_1.omega -->
  <div class="clear"></div>
  <div class="grid_4 smallrow rightside">
    <div class="recruiting-fp shittened">
      <h3><a style="font-size: inherit;"
			href="http://rmacl.org/adult-services/residential-services/">
			Interested in becoming a<br>
			<b>Home Sharing Provider?</b><br>
			Visit our information<br>pages today...
			<!-- Vicuna's 3-day art extravagonza<br>
			<b>Spring into Summer</b><br>
			Thursday-Saturday<br> June 12<sup>th</sup> - 14<sup>th</sup> -->
		</a></h3></div>
  </div>
  <?php /**/ ?>
</div>
<!-- end .grid_4.pull_4 -->

<?php get_footer(); ?>
