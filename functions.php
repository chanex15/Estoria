<?php
/**
 * Estoria theme functions.
 *
 * @package Estoria
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ESTORIA_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function estoria_setup() {
	load_theme_textdomain( 'estoria', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'estoria' ),
		'footer'  => __( 'Footer Menu', 'estoria' ),
	) );

	add_image_size( 'estoria-card', 800, 520, true );
	add_image_size( 'estoria-hero', 1000, 1300, true );
}
add_action( 'after_setup_theme', 'estoria_setup' );

/**
 * Enqueue assets.
 */
function estoria_assets() {
	wp_enqueue_style( 'estoria-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wght@700;800;900&family=Inter:wght@400;500;600;700;800&display=swap', array(), ESTORIA_VERSION );
	wp_enqueue_style( 'estoria-main', get_template_directory_uri() . '/assets/css/main.css', array(), ESTORIA_VERSION );

	wp_enqueue_script( 'estoria-main', get_template_directory_uri() . '/assets/js/main.js', array(), ESTORIA_VERSION, true );
	wp_localize_script( 'estoria-main', 'estoriaData', array(
		'ajaxUrl' => admin_url( 'admin-ajax.php' ),
		'nonce'   => wp_create_nonce( 'estoria_nonce' ),
	) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'estoria_assets' );

/**
 * SVG favicon + Open Graph tags.
 */
function estoria_head_meta() {
	$favicon = get_template_directory_uri() . '/assets/images/favicon.svg';
	$og      = get_template_directory_uri() . '/assets/images/og-cover.jpg';
	echo '<link rel="icon" href="' . esc_url( $favicon ) . '" type="image/svg+xml">' . "\n";
	echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
	echo '<meta property="og:type" content="website">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( wp_get_document_title() ) . '">' . "\n";
	echo '<meta property="og:image" content="' . esc_url( $og ) . '">' . "\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:image" content="' . esc_url( $og ) . '">' . "\n";
}
add_action( 'wp_head', 'estoria_head_meta', 5 );

/**
 * Footer widgets.
 */
function estoria_widgets() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'estoria' ),
		'id'            => 'footer-1',
		'description'   => __( 'Appears in the footer. If empty, the default footer content is shown.', 'estoria' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-heading">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'estoria_widgets' );

/**
 * Customizer options.
 */
function estoria_customize( $wp_customize ) {
	$wp_customize->add_section( 'estoria_contact', array(
		'title'    => __( 'Estoria Contact', 'estoria' ),
		'priority' => 30,
	) );

	$fields = array(
		'estoria_phone'   => array( 'label' => __( 'Phone display', 'estoria' ), 'default' => '(480) 555-0103' ),
		'estoria_address' => array( 'label' => __( 'Address', 'estoria' ), 'default' => '6391 Elgin St. Celina, Delaware' ),
		'estoria_email'   => array( 'label' => __( 'Email', 'estoria' ), 'default' => 'hello@estoria-estates.com' ),
		'estoria_hours'   => array( 'label' => __( 'Working hours', 'estoria' ), 'default' => 'Mon–Sat · 9:00 — 19:00' ),
	);
	foreach ( $fields as $key => $field ) {
		$wp_customize->add_setting( $key, array(
			'default'           => $field['default'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $key, array(
			'label'   => $field['label'],
			'section' => 'estoria_contact',
			'type'    => 'text',
		) );
	}

	$wp_customize->add_section( 'estoria_hero', array(
		'title'    => __( 'Estoria Hero', 'estoria' ),
		'priority' => 31,
	) );

	$hero_fields = array(
		'estoria_hero_title_a' => array( 'label' => __( 'Hero line 1 (before accent)', 'estoria' ), 'default' => 'Real' ),
		'estoria_hero_accent'  => array( 'label' => __( 'Hero accent word', 'estoria' ), 'default' => 'Estate' ),
		'estoria_hero_title_b' => array( 'label' => __( 'Hero line 2', 'estoria' ), 'default' => 'Investments' ),
		'estoria_hero_sub'     => array( 'label' => __( 'Hero subtitle', 'estoria' ), 'default' => 'Buy a furnished apartment in one of our Celina towers. Our hotel team rents it, maintains it and pays you a fixed amount every month — written into your contract before you sign.' ),
		'estoria_payout'       => array( 'label' => __( 'Payout figure', 'estoria' ), 'default' => '$1,240' ),
		'estoria_occupancy'    => array( 'label' => __( 'Occupancy figure', 'estoria' ), 'default' => '98.2%' ),
	);
	foreach ( $hero_fields as $key => $field ) {
		$wp_customize->add_setting( $key, array(
			'default'           => $field['default'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $key, array(
			'label'   => $field['label'],
			'section' => 'estoria_hero',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'estoria_customize' );

/**
 * Helpers to read contact details with fallbacks.
 */
function estoria_phone() {
	return get_theme_mod( 'estoria_phone', '(480) 555-0103' );
}
function estoria_phone_href() {
	$digits = preg_replace( '/[^0-9+]/', '', estoria_phone() );
	return 'tel:+1' . ltrim( $digits, '+1' );
}
function estoria_address() {
	return get_theme_mod( 'estoria_address', '6391 Elgin St. Celina, Delaware' );
}
function estoria_email() {
	return get_theme_mod( 'estoria_email', 'hello@estoria-estates.com' );
}
function estoria_hours() {
	return get_theme_mod( 'estoria_hours', 'Mon–Sat · 9:00 — 19:00' );
}

/**
 * Estoria emblem (SVG twin-tower shield). $variant: color|white.
 */
function estoria_logo_mark( $variant = 'color', $class = 'brand-mark-svg' ) {
	$base   = ( 'white' === $variant ) ? '#ffffff' : '#0e63e6';
	$inner  = ( 'white' === $variant ) ? '#0e63e6' : '#ffffff';
	$accent = ( 'white' === $variant ) ? 'rgba(255,255,255,0.55)' : '#8fb8ff';
	ob_start(); ?>
<svg class="<?php echo esc_attr( $class ); ?>" viewBox="0 0 48 48" role="img" aria-label="<?php bloginfo( 'name' ); ?>" fill="none">
	<path d="M24 2.5 6 8.2v13.4c0 11.2 7.4 19.1 18 23.9 10.6-4.8 18-12.7 18-23.9V8.2L24 2.5Z" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="16.4" y="17" width="6" height="18" rx="1" fill="<?php echo esc_attr( $inner ); ?>"/>
	<rect x="25.6" y="13" width="6" height="22" rx="1" fill="<?php echo esc_attr( $inner ); ?>"/>
	<rect x="18" y="20" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="18" y="24" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="18" y="28" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="27.2" y="16.5" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="27.2" y="20.5" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="27.2" y="24.5" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<rect x="27.2" y="28.5" width="2.8" height="2.2" rx="0.4" fill="<?php echo esc_attr( $base ); ?>"/>
	<path d="M28.6 13 24 8.6l-4.6 4.4" stroke="<?php echo esc_attr( $accent ); ?>" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
	<?php
	return ob_get_clean();
}

/**
 * Full lockup: emblem + wordmark.
 */
function estoria_logo( $variant = 'color', $show_tagline = true ) {
	$word_class = ( 'white' === $variant ) ? 'brand-word light' : 'brand-word';
	$tag_class  = ( 'white' === $variant ) ? 'brand-tag light' : 'brand-tag';
	echo '<span class="brand-lockup">';
	echo estoria_logo_mark( $variant ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG.
	echo '<span class="brand-word-wrap"><span class="' . esc_attr( $word_class ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</span>';
	if ( $show_tagline ) {
		echo '<span class="' . esc_attr( $tag_class ) . '">' . esc_html__( 'Estates & Income', 'estoria' ) . '</span>';
	}
	echo '</span></span>';
}

/**
 * Default apartments (used when no posts exist). Editable via Customizer copy or child theme filter.
 */
function estoria_default_apartments() {
	$base = get_template_directory_uri() . '/assets/images';
	$defaults = array(
		array( 'title' => 'Sky Studio · Tower A', 'unit' => 'A-1204', 'building' => 'Estoria Tower A', 'price' => '$128,000', 'yield' => '8.4%', 'payout' => '$896/mo', 'beds' => 'Studio', 'baths' => '1', 'area' => '412 sq ft', 'floor' => '12th floor · park view', 'status' => 'Available', 'image' => $base . '/apt-1.jpg', 'tag' => 'High yield' ),
		array( 'title' => 'Comfort One-Bed · Tower A', 'unit' => 'A-0811', 'building' => 'Estoria Tower A', 'price' => '$186,500', 'yield' => '7.9%', 'payout' => '$1,240/mo', 'beds' => '1', 'baths' => '1', 'area' => '624 sq ft', 'floor' => '8th floor · city view', 'status' => 'Available', 'image' => $base . '/apt-2.jpg', 'tag' => 'Most popular' ),
		array( 'title' => 'Family Two-Bed · Tower B', 'unit' => 'B-0618', 'building' => 'Estoria Tower B', 'price' => '$249,000', 'yield' => '7.4%', 'payout' => '$1,535/mo', 'beds' => '2', 'baths' => '2', 'area' => '893 sq ft', 'floor' => '6th floor · courtyard', 'status' => 'Available', 'image' => $base . '/apt-3.jpg', 'tag' => '' ),
		array( 'title' => 'Corner Suite · Tower B', 'unit' => 'B-1102', 'building' => 'Estoria Tower B', 'price' => '$312,000', 'yield' => '7.1%', 'payout' => '$1,845/mo', 'beds' => '2', 'baths' => '2', 'area' => '1,024 sq ft', 'floor' => '11th floor · corner', 'status' => 'Last unit', 'image' => $base . '/apt-4.jpg', 'tag' => 'Corner view' ),
		array( 'title' => 'Park Loft · Tower A', 'unit' => 'A-0407', 'building' => 'Estoria Tower A', 'price' => '$198,000', 'yield' => '7.7%', 'payout' => '$1,270/mo', 'beds' => '1', 'baths' => '1', 'area' => '688 sq ft', 'floor' => '4th floor · park view', 'status' => 'Available', 'image' => $base . '/apt-5.jpg', 'tag' => '' ),
		array( 'title' => 'Executive Residence · Tower B', 'unit' => 'B-1401', 'building' => 'Estoria Tower B', 'price' => '$389,000', 'yield' => '6.8%', 'payout' => '$2,205/mo', 'beds' => '3', 'baths' => '2', 'area' => '1,286 sq ft', 'floor' => '14th floor · skyline', 'status' => 'Available', 'image' => $base . '/apt-6.jpg', 'tag' => 'Premium' ),
		array( 'title' => 'Glass Residence · Tower A', 'unit' => 'A-1009', 'building' => 'Estoria Tower A', 'price' => '$224,000', 'yield' => '7.6%', 'payout' => '$1,418/mo', 'beds' => '1', 'baths' => '1', 'area' => '742 sq ft', 'floor' => '10th floor · glass wall', 'status' => 'Available', 'image' => $base . '/apt-7.jpg', 'tag' => 'New release' ),
		array( 'title' => 'Garden One-Bed · Tower B', 'unit' => 'B-0314', 'building' => 'Estoria Tower B', 'price' => '$179,000', 'yield' => '8.0%', 'payout' => '$1,193/mo', 'beds' => '1', 'baths' => '1', 'area' => '598 sq ft', 'floor' => '3rd floor · garden', 'status' => 'Available', 'image' => $base . '/apt-8.jpg', 'tag' => '' ),
		array( 'title' => 'Panorama Suite · Tower A', 'unit' => 'A-1306', 'building' => 'Estoria Tower A', 'price' => '$268,000', 'yield' => '7.3%', 'payout' => '$1,630/mo', 'beds' => '2', 'baths' => '1', 'area' => '912 sq ft', 'floor' => '13th floor · panorama', 'status' => 'Reserved', 'image' => $base . '/apt-9.jpg', 'tag' => 'Panoramic' ),
		array( 'title' => 'Skyline King · Tower B', 'unit' => 'B-1210', 'building' => 'Estoria Tower B', 'price' => '$295,000', 'yield' => '7.2%', 'payout' => '$1,770/mo', 'beds' => '2', 'baths' => '2', 'area' => '968 sq ft', 'floor' => '12th floor · skyline', 'status' => 'Available', 'image' => $base . '/apt-10.jpg', 'tag' => '' ),
		array( 'title' => 'Studio Plus · Tower A', 'unit' => 'A-0519', 'building' => 'Estoria Tower A', 'price' => '$142,000', 'yield' => '8.2%', 'payout' => '$970/mo', 'beds' => 'Studio', 'baths' => '1', 'area' => '468 sq ft', 'floor' => '5th floor · courtyard', 'status' => 'Last unit', 'image' => $base . '/apt-11.jpg', 'tag' => 'Last at price' ),
		array( 'title' => 'Chef\'s Residence · Tower B', 'unit' => 'B-0922', 'building' => 'Estoria Tower B', 'price' => '$336,000', 'yield' => '7.0%', 'payout' => '$1,960/mo', 'beds' => '2', 'baths' => '2', 'area' => '1,102 sq ft', 'floor' => '9th floor · terrace', 'status' => 'Available', 'image' => $base . '/apt-12.jpg', 'tag' => 'Chef\'s kitchen' ),
	);
	return apply_filters( 'estoria_apartments', $defaults );
}

/**
 * Fallback menu when no menu is assigned.
 */
function estoria_fallback_menu() {
	echo '<nav class="nav" aria-label="' . esc_attr__( 'Primary', 'estoria' ) . '">';
	echo '<a class="nav-link is-active" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'estoria' ) . '</a>';
	echo '<a class="nav-link" href="' . esc_url( home_url( '/#apartments' ) ) . '">' . esc_html__( 'Apartments', 'estoria' ) . '</a>';
	echo '<a class="nav-link" href="' . esc_url( home_url( '/#services' ) ) . '">' . esc_html__( 'Services', 'estoria' ) . '</a>';
	echo '<a class="nav-link" href="' . esc_url( home_url( '/#prices' ) ) . '">' . esc_html__( 'Prices', 'estoria' ) . '</a>';
	echo '<a class="nav-link" href="' . esc_url( home_url( '/#about' ) ) . '">' . esc_html__( 'About Us', 'estoria' ) . '</a>';
	echo '</nav>';
}

/**
 * AJAX: callback request. Stores as a private inquiry post + emails admin.
 */
function estoria_handle_callback() {
	check_ajax_referer( 'estoria_nonce', 'nonce' );
	$phone = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$name  = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';

	if ( strlen( preg_replace( '/\D/', '', $phone ) ) < 7 ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid phone number.', 'estoria' ) ), 400 );
	}

	$post_id = wp_insert_post( array(
		'post_type'   => 'post',
		'post_status' => 'private',
		'post_title'  => sprintf( __( 'Callback: %s', 'estoria' ), $phone ),
		'post_content' => sprintf( "Name: %s\nPhone: %s", $name, $phone ),
		'meta_input'  => array( '_estoria_type' => 'callback' ),
	) );

	$admin = get_option( 'admin_email' );
	/* translators: %s: phone number */
	wp_mail( $admin, sprintf( __( 'New callback request: %s', 'estoria' ), $phone ), "Name: {$name}\nPhone: {$phone}\nPost: {$post_id}" );

	wp_send_json_success();
}
add_action( 'wp_ajax_estoria_callback', 'estoria_handle_callback' );
add_action( 'wp_ajax_nopriv_estoria_callback', 'estoria_handle_callback' );

/**
 * AJAX: contact message.
 */
function estoria_handle_contact() {
	check_ajax_referer( 'estoria_nonce', 'nonce' );
	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';

	if ( ! $name || ! is_email( $email ) || ! $message ) {
		wp_send_json_error( array( 'message' => __( 'Please complete all required fields.', 'estoria' ) ), 400 );
	}

	wp_insert_post( array(
		'post_type'    => 'post',
		'post_status'  => 'private',
		'post_title'   => sprintf( __( 'Contact: %s', 'estoria' ), $name ),
		'post_content' => sprintf( "Name: %s\nEmail: %s\nPhone: %s\n\n%s", $name, $email, $phone, $message ),
		'meta_input'   => array( '_estoria_type' => 'contact' ),
	) );

	wp_mail( get_option( 'admin_email' ), sprintf( __( 'New contact message from %s', 'estoria' ), $name ), $message, array( 'Reply-To: ' . $name . ' <' . $email . '>' ) );

	wp_send_json_success();
}
add_action( 'wp_ajax_estoria_contact', 'estoria_handle_contact' );
add_action( 'wp_ajax_nopriv_estoria_contact', 'estoria_handle_contact' );
