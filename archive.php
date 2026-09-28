<?php
/**
 * Archive template.
 *
 * @package Estoria
 */
get_header();
?>
<section class="page-hero">
	<div class="container-x page-hero-inner">
		<p class="eyebrow"><?php esc_html_e( 'Archive', 'estoria' ); ?></p>
		<h1 class="page-title"><?php the_archive_title(); ?></h1>
		<?php if ( get_the_archive_description() ) : ?>
			<p class="page-sub"><?php echo wp_kses_post( get_the_archive_description() ); ?></p>
		<?php endif; ?>
	</div>
</section>
<section class="prose">
	<div class="container-x section-pad">
		<?php if ( have_posts() ) : ?>
			<div class="cards">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="post-card">
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
				<?php echo wp_kses_post( paginate_links() ); ?>
			</div>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts found in this archive.', 'estoria' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
get_footer();
