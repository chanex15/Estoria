<?php
/**
 * 404 template.
 *
 * @package Estoria
 */
get_header();
?>
<section class="prose">
	<div class="container-x section-pad center">
		<p class="eyebrow" style="justify-content:center"><?php esc_html_e( 'Error 404', 'estoria' ); ?></p>
		<h1 class="page-title" style="margin-left:auto;margin-right:auto;text-align:center"><?php esc_html_e( 'This page moved or never existed.', 'estoria' ); ?></h1>
		<p class="page-sub" style="margin-left:auto;margin-right:auto;text-align:center"><?php esc_html_e( 'The apartment you are looking for may have been sold — but new units release every month. Start from the homepage.', 'estoria' ); ?></p>
		<p class="center-cta">
			<a class="btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'estoria' ); ?></a>
			<a class="btn-ghost" href="<?php echo esc_url( home_url( '/#apartments' ) ); ?>"><?php esc_html_e( 'Browse apartments', 'estoria' ); ?></a>
		</p>
	</div>
</section>
<?php
get_footer();
