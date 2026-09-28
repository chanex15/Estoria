<?php
/**
 * Search results template.
 *
 * @package Estoria
 */
get_header();
?>
<section class="page-hero">
	<div class="container-x page-hero-inner">
		<p class="eyebrow"><?php esc_html_e( 'Search', 'estoria' ); ?></p>
		<h1 class="page-title"><?php printf( esc_html__( 'Results for “%s”', 'estoria' ), esc_html( get_search_query() ) ); ?></h1>
		<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="hero-form" style="margin-top:24px">
			<label for="s" style="position:absolute;left:-9999px"><?php esc_html_e( 'Search', 'estoria' ); ?></label>
			<input type="search" id="s" name="s" class="input-line" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="<?php esc_attr_e( 'Search apartments, guides…', 'estoria' ); ?>">
			<button type="submit" class="btn-primary"><?php esc_html_e( 'Search', 'estoria' ); ?></button>
		</form>
	</div>
</section>
<section class="prose">
	<div class="container-x section-pad">
		<?php if ( have_posts() ) : ?>
			<div class="cards">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="post-card">
						<div class="post-card-body">
							<p class="post-meta"><?php echo esc_html( get_post_type() ); ?> · <?php echo esc_html( get_the_date() ); ?></p>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="post-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<div class="pagination"><?php echo wp_kses_post( paginate_links() ); ?></div>
		<?php else : ?>
			<div class="content-narrow">
				<h2><?php esc_html_e( 'Nothing found.', 'estoria' ); ?></h2>
				<p><?php esc_html_e( 'Try a different keyword, or browse apartments and prices from the homepage.', 'estoria' ); ?></p>
				<p><a class="btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'estoria' ); ?></a></p>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
