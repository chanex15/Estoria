<?php
/**
 * Single post template.
 *
 * @package Estoria
 */
get_header();
while ( have_posts() ) : the_post();
?>
<section class="page-hero">
	<div class="container-x page-hero-inner">
		<nav class="crumbs" aria-label="<?php esc_attr_e( 'Breadcrumb', 'estoria' ); ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'estoria' ); ?></a>
			<span>/</span>
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' ) ); ?>"><?php esc_html_e( 'Journal', 'estoria' ); ?></a>
			<span>/</span>
			<span class="here"><?php the_title(); ?></span>
		</nav>
		<p class="eyebrow" style="margin-top:24px"><?php echo esc_html( get_the_date() ); ?> · <?php the_author(); ?></p>
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
</section>
<section class="prose">
	<div class="container-x section-pad">
		<div class="content-narrow prose-body">
			<?php if ( has_post_thumbnail() ) : ?>
				<p><img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="border-radius:20px"></p>
			<?php endif; ?>
			<?php the_content(); ?>
			<p>
				<?php the_tags( '<span>' . esc_html__( 'Tagged: ', 'estoria' ), ', ', '</span>' ); ?>
			</p>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		</div>
	</div>
</section>
<?php
endwhile;
get_footer();
