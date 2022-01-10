</div><!-- .content -->

</div><!-- .page -->


<footer class="footer bg-dark-1 py-50">
	<div class="container">

		<div class="row mb-25">
			<div class="col-12 col-md-auto">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="w-auto">
			</div>
			<div class="col-12 col-md-auto">
			<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-main',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => '',
						'container_id'      => 'footer-menu',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
			?>
			</div>
			<div class="col-12 col-md-auto ml-0 ml-md-auto d-flex align-items-center">
				<div class="footer-social">
					<a href="<?php the_field('social-links_facebook', 'options'); ?>" class="social-link">
						<i class="icon-facebook"></i>
					</a>
					<a href="<?php the_field('social-links_twitter', 'options'); ?>" class="social-link">
						<i class="icon-twitter"></i>
					</a>
					<a href="<?php the_field('social-links_instagram', 'options'); ?>" class="social-link">
						<i class="icon-instagram"></i>
					</a>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<div class="footer-links mx-0 ml-md-auto">
					<a href="#" class="footer-link mr-25 text-white">Terms & Conditions</a>
					<a href="#" class="footer-link text-white">Privacy Policy</a>
				</div>
			</div>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
<?php crnx_custom_footer_scripts(); ?>

</body>

</html>