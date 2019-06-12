<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
	global $dream_travel_opt; 
	$facebook = $dream_travel_opt['general-facebook'];
	$pinterest = $dream_travel_opt['general-pinterest'];
	$instagram = $dream_travel_opt['general-instagram'];
	$twitter = $dream_travel_opt['general-twitter'];
	$google_plus = $dream_travel_opt['general-google-plus'];
	$address = $dream_travel_opt['general-address'];
?>
	<header class="site-header">
		<div class="container-fluid top-contact-info">
			<div class="contaier">
				<div class="row ">
					<div class="left-side">
						<ul class="social-medias">
						<?php if ($facebook) { ?>
							<li><a href="<?php esc_html( $facebook ); ?>">
								<i class="fab fa-facebook-f"></i>
							</a></li>
						<?php } ?>
						<?php if ($pinterest) { ?>
							<li><a href="<?php esc_html( $pinterest ); ?>">
								<i class="fab fa-pinterest"></i>
							</a></li>
						<?php } ?>
						<?php if ($instagram) { ?>
							<li><a href="<?php esc_html( $instagram ); ?>">
								<i class="fab fa-instagram"></i>
							</a></li>
						<?php } ?>
						<?php if ($twitter) { ?>
							<li><a href="<?php esc_html( $twitter ); ?>">
								<i class="fab fa-twitter"></i>
							</a></li>
						<?php } ?>
						<?php if ($google_plus) { ?>
							<li><a href="<?php esc_html( $google_plus ); ?>">
								<i class="fab fa-google-plus-g"></i>
							</a></li>
						<?php } ?>
						</ul>
					</div>
					<div class="right-side">
						<?php if ($address) { ?>
							<p class="address"><?php esc_html_e( $address, 'dream-travel' ) ?></p>
						<?php } ?>
						<div class="login-opt">
							<button>Login</button>
							<div class="divider"></div>
							<button>Register</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="">
			
		</div>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$dream_travel_description = get_bloginfo( 'description', 'display' );
			if ( $dream_travel_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $dream_travel_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dream-travel' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content">
