<footer class="site-footer">
	<div class="footer-columns">
		<div class="footer-col">
			<a class="footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php echo file_get_contents( get_stylesheet_directory() . '/assets/images/cadington1_logo.svg' ); ?>
			</a>
			<p>Connecting individuals, families, and organizations with essential resources, guidance, and structured support.</p>
		</div>
		<div class="footer-col">
			<h3>Quick Links</h3>
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#who-we-serve">Who We Serve</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h3>Contact</h3>
			<ul>
				<li><a href="mailto:info@cadington.com">info@cadington.com</a></li>
				<li><a href="tel:+10000000000">(000) 000-0000</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-bottom">
		<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
