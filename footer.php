</div><!-- .content -->

</div><!-- .page -->

<?php 
if(!isset($_COOKIE['footerMsg'])) {
?>
<div class="footer-messege">
	<div class="container">
		<div class="footer-messege__box">
			<p>Trading in CFDs and other derivatives is highly speculative and carries a high level of risk.</p>
			<p class="footer-messege__closed">
				<svg width="14" height="14" viewBox="0 0 14 14" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path d="M1 13L13 1" stroke="white" stroke-width="2" />
					<path d="M1 13L13 1" stroke="white" stroke-width="2" />
					<path d="M13 13L1 1" stroke="white" stroke-width="2" />
					<path d="M13 13L1 1" stroke="white" stroke-width="2" />
				</svg>
			</p>
		</div>
	</div>
</div>
<?php } ?>

<footer class="footer">
	<div class="container">

		<div class="row footer__menu-row pl-sm-0 pr-sm-0">
			<div class="col-12 col-sm-6 col-lg-3 pl-sm-0">
				<h5 class="footer__menu-title">Instruments</h5>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer-1',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 pl-sm-0">
				<h5 class="footer__menu-title">Company</h5>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer-3',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 pl-sm-0">
				<h5 class="footer__menu-title">Trading</h5>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer-2',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 pl-sm-0 pr-sm-0 d-none d-sm-flex flex-column">
				<button class="btn btn-secondary footer__btn-open-acc">Open an account</button>				
			</div>
		</div>

		<div class="row footer__info-row pl-2 pl-sm-0">
			<div class="col-12 col-md-6 p-sm-0">
				<div class="footer__brand">
					<div class="footer__logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
					</div>
				</div>
				<div class="footer__copyright d-none d-md-block">© 2006 - 2021 Cornix Ltd., All Rights reserved</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 offset-lg-2 p-sm-0">
				<div class="footer__social">
					<a href="<?php the_field('social-links_facebook', 'options'); ?>" class="footer__social-link">
						<i class="icon-facebook"></i>
					</a>
					<a href="<?php the_field('social-links_twitter', 'options'); ?>" class="footer__social-link">
						<i class="icon-twitter"></i>
					</a>
					<a href="<?php the_field('social-links_instagram', 'options'); ?>" class="footer__social-link">
						<i class="icon-instagram"></i>
					</a>
				</div>

				<div class="footer__links">
					<a href="#" class="footer__link hero__link">Commissions & Free Stock Disclosures</a>
				</div>
			</div>
			<div class="col-12 d-md-none mt-3 p-sm-0">
				<div class="footer__copyright">© 2006 - 2021 Cornix Ltd., All Rights reserved</div>
			</div>
		</div>


	</div>
</footer>

<?php get_template_part( 'template-parts/modal/country-restrictions', null, array() ); ?>

<?php wp_footer(); ?>
<?php crnx_custom_footer_scripts(); ?>

</body>

</html>