<?php
/**
 * Page template.
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
			<span class="here"><?php the_title(); ?></span>
		</nav>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php if ( has_excerpt() ) : ?>
			<p class="page-sub"><?php echo esc_html( get_the_excerpt() ); ?></p>
		<?php endif; ?>
	</div>
</section>
<section class="prose">
	<div class="container-x section-pad">
		<div class="content-narrow prose-body">
			<?php if ( has_post_thumbnail() ) : ?>
				<p><img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" style="border-radius:20px"></p>
			<?php endif; ?>
			<?php the_content(); ?>
			<?php
			wp_link_pages( array(
				'before' => '<div class="pagination"><span>' . esc_html__( 'Pages:', 'estoria' ) . '</span> ',
				'after'  => '</div>',
			) );
			?>
		</div>
	</div>
</section>
<?php
endwhile;
get_footer();
