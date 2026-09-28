<?php
/**
 * Header template.
 *
 * @package Estoria
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'estoria' ); ?></a>

<div class="topbar">
	<div class="container-x topbar-inner">
		<div class="topbar-social">
			<a href="#" aria-label="Facebook">
				<svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor" aria-hidden="true"><path d="M7.5 2.4H8.9V.2H7.2c-1.7 0-2.6 1-2.6 2.6v1.5H3V6.5h1.6v5.3h2.2V6.5h1.6l.3-2.2H6.8V2.9c0-.3.3-.5.7-.5Z"/></svg>
				<?php esc_html_e( 'Facebook', 'estoria' ); ?>
			</a>
			<a href="#" aria-label="Twitter">
				<svg width="13" height="11" viewBox="0 0 14 12" fill="currentColor" aria-hidden="true"><path d="M12.9 1.5a5.6 5.6 0 0 1-1.6.4A2.8 2.8 0 0 0 12.5.4a5.6 5.6 0 0 1-1.8.7A2.8 2.8 0 0 0 5.9 3.6 8 8 0 0 1 .1 1.1a2.8 2.8 0 0 0 .9 3.7 2.8 2.8 0 0 1-1.3-.3v.1a2.8 2.8 0 0 0 2.2 2.7 2.8 2.8 0 0 1-1.2.1 2.8 2.8 0 0 0 2.6 1.9A5.6 5.6 0 0 1 0 10.4a7.9 7.9 0 0 0 4.3 1.2c5.1 0 7.9-4.2 7.9-7.9v-.4c.6-.3 1-1 1.2-1.5l-.5-.3Z"/></svg>
				<?php esc_html_e( 'Twitter', 'estoria' ); ?>
			</a>
		</div>
		<div class="topbar-meta">
			<span class="topbar-address">
				<svg width="12" height="14" viewBox="0 0 12 14" fill="currentColor" aria-hidden="true"><path d="M6 7.2a1.7 1.7 0 1 0 0-3.4 1.7 1.7 0 0 0 0 3.4Zm0 6.1 4.6-5.3a5.4 5.4 0 1 0-9.2 0L6 13.3Z"/></svg>
				<?php echo esc_html( estoria_address() ); ?>
			</span>
			<a class="topbar-phone" href="<?php echo esc_url( estoria_phone_href() ); ?>">
				<svg width="13" height="13" viewBox="0 0 14 14" fill="currentColor" aria-hidden="true"><path d="M13 9.8v2a1.5 1.5 0 0 1-1.6 1.5A12.5 12.5 0 0 1 .7 2.6 1.5 1.5 0 0 1 2.2 1h2A1.5 1.5 0 0 1 5.7 2c.2.7.4 1.3.7 1.9a1.5 1.5 0 0 1-.3 1.6L5 6.6a10.7 10.7 0 0 0 2.4 2.4l1.1-1.1a1.5 1.5 0 0 1 1.6-.3c.6.3 1.2.5 1.9.7a1.5 1.5 0 0 1 1 1.5Z"/></svg>
				<?php echo esc_html( estoria_phone() ); ?>
			</a>
		</div>
	</div>
</div>

<header class="site-header" id="siteHeader">
	<div class="container-x header-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo( 'name' ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<?php estoria_logo( 'color' ); ?>
			<?php endif; ?>
		</a>

		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => 'nav',
				'container_class'=> 'nav-wrap',
				'menu_class'     => 'nav',
				'link_before'    => '<span>',
				'link_after'     => '</span>',
			) );
		} else {
			estoria_fallback_menu();
		}
		?>

		<div class="header-cta">
			<a class="header-phone" href="<?php echo esc_url( estoria_phone_href() ); ?>"><?php echo esc_html( estoria_phone() ); ?></a>
			<button type="button" class="btn-primary" data-open-callback><?php esc_html_e( 'Call me back', 'estoria' ); ?></button>
		</div>

		<button type="button" class="burger" id="burger" aria-expanded="false" aria-controls="mobileDrawer" aria-label="<?php esc_attr_e( 'Open menu', 'estoria' ); ?>">
			<span></span><span></span><span></span>
		</button>
	</div>
</header>

<div class="drawer-root" id="drawerRoot" aria-hidden="true">
	<div class="drawer-scrim" data-close-drawer></div>
	<aside class="drawer" id="mobileDrawer" aria-label="<?php esc_attr_e( 'Mobile menu', 'estoria' ); ?>">
		<div class="drawer-head">
			<?php estoria_logo( 'color', false ); ?>
			<button type="button" class="drawer-close" data-close-drawer aria-label="<?php esc_attr_e( 'Close menu', 'estoria' ); ?>">✕</button>
		</div>
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'drawer-nav', 'menu_class' => 'drawer-list' ) );
		} else {
			echo '<nav class="drawer-nav"><div class="drawer-list">';
			echo '<a href="' . esc_url( home_url( '/' ) ) . '">Home</a>';
			echo '<a href="' . esc_url( home_url( '/#apartments' ) ) . '">Apartments</a>';
			echo '<a href="' . esc_url( home_url( '/#services' ) ) . '">Services</a>';
			echo '<a href="' . esc_url( home_url( '/#prices' ) ) . '">Prices</a>';
			echo '<a href="' . esc_url( home_url( '/#about' ) ) . '">About Us</a>';
			echo '</div></nav>';
		}
		?>
		<div class="drawer-foot">
			<p><?php echo esc_html( estoria_address() ); ?><br><?php echo esc_html( estoria_hours() ); ?></p>
			<a class="drawer-phone" href="<?php echo esc_url( estoria_phone_href() ); ?>"><?php echo esc_html( estoria_phone() ); ?></a>
			<button type="button" class="btn-primary btn-block" data-open-callback><?php esc_html_e( 'Call me back', 'estoria' ); ?></button>
		</div>
	</aside>
</div>

<main id="main">
