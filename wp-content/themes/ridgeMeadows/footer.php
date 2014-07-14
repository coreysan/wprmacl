
</div><!--Container-->
	</div><!--Main-->
	<!--Footer-->
	<div id="footerWrapper">
	<div id="footer">
		<div class="holder">
			<img src="<?php echo bloginfo('template_directory'); ?>/images/logo_carf.png" alt="Carf International">
			<div class="donate alighright"><a href="<?php echo get_permalink( 500 ); ?>">WAYS <span class="orange">2</span> DONATE</a></div>
			<div class="sponsors alighright" style="clear:right;"><a href="<?php echo get_permalink( 967 ); ?>">Click here to visit our Sponsor page</a></div>
		</div>
		<address class="addr">
			<span><a href="<?php echo get_permalink(16); ?>" title="<?php echo get_the_title(16); ?>">Contact Us</a></span>  <span>604-467-8700</span> 11641-224th Street, Maple Ridge BC Canada V2X 6A1
		</address>
		<nav class="footer-nav">
			<?php wp_nav_menu(array('theme_location'=>'footer', 'menu_class' => '', 'menu'=>'footer', 'link_before'=>'', 'link_after'=>'', 'depth'=>1)); ?>
		</nav>
		<small>&copy; <?php echo date("Y") .' '. get_bloginfo('the_title'); ?></small>
	</div>
	</div>
</div><!--Wrapper-->
<div id="skip"><a href="#">Skip to Content</a></div>

<?php
	wp_footer();
?>

</body>
</html>