<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<div class="header-inner">
		<div class="header-left">
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<?php
				// Inlined (rather than <img src>) so the logo's text can use the
				// same @font-face fonts declared in style.css — an SVG loaded via
				// <img> is opaque and can't see the page's fonts/CSS at all.
				echo file_get_contents( get_stylesheet_directory() . '/assets/images/cadington1_logo.svg' );
				?>
			</a>
		</div>
		<div class="header-right">
			<nav class="primary-nav" aria-label="Primary">
				<ul>
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>
