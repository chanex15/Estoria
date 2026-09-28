<?php
/**
 * Main index template.
 *
 * @package Estoria
 */
get_header();
?>
<section class="page-hero">
	<div class="container-x page-hero-inner">
		<p class="eyebrow"><?php esc_html_e( 'Journal', 'estoria' ); ?></p>
		<h1 class="page-title"><?php esc_html_e( 'News & investment guides', 'estoria' ); ?></h1>
		<p class="page-sub"><?php esc_html_e( 'Market notes, yield explainers and tower construction updates from the Estoria team.', 'estoria' ); ?></p>
	</div>
</section>
<section class="prose">
	<div class="container-x section-pad">
		<?php if ( have_posts() ) : ?>
			<div class="cards">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="post-card reveal">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'estoria-card' ); ?></a>
						<?php endif; ?>
						<div class="post-card-body">
							<p class="post-meta"><?php echo esc_html( get_the_date() ); ?></p>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<p class="post-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<div class="pagination">
				<?php
				echo wp_kses_post( paginate_links( array(
					'prev_text' => __( '←', 'estoria' ),
					'next_text' => __( '→', 'estoria' ),
				) ) );
				?>
			</div>
		<?php else : ?>
			<div class="content-narrow">
				<h2><?php esc_html_e( 'Nothing published yet.', 'estoria' ); ?></h2>
				<p><?php esc_html_e( 'Check back soon for market notes and tower updates.', 'estoria' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
