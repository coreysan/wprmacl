<?php
/**
 * Template Name: 3 columns, 2 sidebars
 */

get_header(); ?>
	
		<?php get_sidebar(); ?>
				
		<?php //get_template_part('loop'); ?>

		<!--Twocolumns-->
		<div id="twocolumns">
			<!--Content-->
			<section id="content">
				
				<?php get_template_part('loop'); ?>

				<!--Latest News-->
				<!-- <div class="latest-news">
					<h2>What we're up to</h2>
					
					<article class="news">
						<div class="img-frame"><img src="<?php bloginfo( 'template_directory' ); ?>/images/thumb1.jpg" alt="Image Description"></div>
						<div class="holder">
							<h3><a href="#">Vicuna Art Studio Gala</a></h3>
							<em class="date">September 10th</em>
							<p>Tickets available at any of our locations or through the website</p>
						</div>
					</article>
					
					<article class="news">
						<div class="img-frame"><img src="<?php bloginfo( 'template_directory' ); ?>/images/thumb2.jpg" alt="Image Description"></div>
						<div class="holder">
							<h3><a href="#">Vicuna Art Studio Gala</a></h3>
							<em class="date">September 10th</em>
							<p>Tickets available at any of our locations or through the website</p>
						</div>
					</article>
				</div>
				
				<div class="history">
					<h2>History Pages</h2>
					
					<article class="history-box">
						<div class="img-frame"><img src="<?php bloginfo( 'template_directory' ); ?>/images/thumb3.jpg" alt="Image Description"></div>
						<div class="holder">
							<h3><a href="#">A Look Back through the<br> History of Ridge Meadows</a></h3>
							<p>A presentation in pictures spanning our 50 year history, from inspiration to foundation</p>
						</div>
					</article>
				</div>-->

			</section>
			<!--Aside-->
			<aside class="aside">
				<h3><span>our businesses</span></h3>
				<div class="img-frame"><img src="<?php bloginfo( 'template_directory' ); ?>/images/img-business.jpg" alt="Image Description"></div>
				<div class="business-block">
					<ul>
						<li><a href="#">Ridge Meadows Enterprises</a></li>
						<li><a href="#">Greenwood Industries</a></li>
						<li><a href="#">Vicuna Art Studio</a></li>
						<li><a href="#">Kingston Business Centre</a></li>
						<li><a href="#">Legacies Now Events Trailer</a></li>
					</ul>
				</div>
				<div class="link-box">
					<span><a href="#">Read our training &amp; recruiting process</a></span>
				</div>
			</aside>
		</div>

<?php get_footer(); ?>