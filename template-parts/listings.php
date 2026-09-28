<?php
/**
 * Apartments + services sections.
 *
 * @package Estoria
 */
$apartments = estoria_default_apartments();
?>
<section class="apartments" id="apartments">
	<div class="container-x section-pad">
		<div class="sec-head">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Apartments · 10 available now', 'estoria' ); ?></p>
				<h2 class="sec-title"><?php esc_html_e( '12 income-ready units in Tower A & B', 'estoria' ); ?></h2>
				<p class="sec-sub"><?php esc_html_e( 'Real units with unit numbers, floors and contracted payouts. Every listing is photographed, furnished and connected to the hotel rental pool.', 'estoria' ); ?></p>
			</div>
			<div class="reveal">
				<div class="filter-tabs" role="tablist" aria-label="<?php esc_attr_e( 'Filter by building', 'estoria' ); ?>">
					<button type="button" class="is-active" data-filter="all" role="tab" aria-selected="true"><?php esc_html_e( 'All', 'estoria' ); ?></button>
					<button type="button" data-filter="tower-a" role="tab" aria-selected="false"><?php esc_html_e( 'Tower A', 'estoria' ); ?></button>
					<button type="button" data-filter="tower-b" role="tab" aria-selected="false"><?php esc_html_e( 'Tower B', 'estoria' ); ?></button>
				</div>
			</div>
		</div>

		<div class="cards">
			<?php foreach ( $apartments as $apt ) : ?>
				<?php $key = stripos( $apt['building'], 'Tower A' ) !== false ? 'tower-a' : 'tower-b'; ?>
				<article class="card reveal" data-building="<?php echo esc_attr( $key ); ?>">
					<div class="card-media">
						<img src="<?php echo esc_url( $apt['image'] ); ?>" alt="<?php echo esc_attr( $apt['title'] . ', unit ' . $apt['unit'] ); ?>" loading="lazy">
						<span class="card-status status-<?php echo esc_attr( strtolower( str_replace( ' ', '-', $apt['status'] ) ) ); ?>"><?php echo esc_html( $apt['status'] ); ?></span>
						<span class="card-yield"><?php echo esc_html( $apt['yield'] ); ?> <?php esc_html_e( 'net', 'estoria' ); ?></span>
						<?php if ( ! empty( $apt['tag'] ) ) : ?>
							<span class="card-tag overlay"><?php echo esc_html( $apt['tag'] ); ?></span>
						<?php endif; ?>
					</div>
					<div class="card-body">
						<p class="card-building"><?php echo esc_html( $apt['building'] . ' · Unit ' . $apt['unit'] ); ?></p>
						<h3 class="card-title"><?php echo esc_html( $apt['title'] ); ?></h3>
						<p class="card-floor"><?php echo esc_html( $apt['floor'] ); ?></p>
						<div class="card-meta">
							<span><?php echo esc_html( 'Studio' === $apt['beds'] ? 'Studio' : $apt['beds'] . ' bd' ); ?></span><i>•</i>
							<span><?php echo esc_html( $apt['baths'] ); ?> <?php esc_html_e( 'ba', 'estoria' ); ?></span><i>•</i>
							<span><?php echo esc_html( $apt['area'] ); ?></span>
						</div>
						<p class="card-payout"><?php echo esc_html( $apt['payout'] ); ?> <?php esc_html_e( 'guaranteed payout', 'estoria' ); ?></p>
						<div class="card-foot">
							<div>
								<p class="card-price-lbl"><?php esc_html_e( 'Price', 'estoria' ); ?></p>
								<p class="card-price"><?php echo esc_html( $apt['price'] ); ?></p>
							</div>
							<button type="button" class="btn-ghost" data-open-callback><?php esc_html_e( 'Details', 'estoria' ); ?></button>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="center-cta reveal">
			<a class="btn-ghost" href="#contact"><?php esc_html_e( 'View all availability', 'estoria' ); ?></a>
			<button type="button" class="btn-primary" data-open-callback><?php esc_html_e( 'Check my budget fit', 'estoria' ); ?></button>
		</div>
	</div>
</section>

<section class="portfolio" id="portfolio">
	<div class="container-x section-pad">
		<div class="sec-head">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Portfolio', 'estoria' ); ?></p>
				<h2 class="sec-title"><?php esc_html_e( 'Three addresses, one operator', 'estoria' ); ?></h2>
				<p class="sec-sub"><?php esc_html_e( 'Real buildings you can visit today in Celina, Delaware. Every tower is managed by our own hotel team.', 'estoria' ); ?></p>
			</div>
		</div>
		<div class="cards" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr))">
			<article class="card reveal">
				<div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tower-c.jpg' ); ?>" alt="Estoria Tower A" loading="lazy"><span class="card-yield" style="left:16px;right:auto">98.6% occ.</span></div>
				<div class="card-body"><p class="card-building">268 units · 14 floors · 2019</p><h3 class="card-title">Estoria Tower A</h3><p class="card-floor">6391 Elgin St. · Celina, DE</p><p class="post-excerpt">The established income tower — courtyard, co-working lounge and rooftop terrace.</p></div>
			</article>
			<article class="card reveal">
				<div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/tower-dusk.jpg' ); ?>" alt="Estoria Tower B" loading="lazy"><span class="card-yield" style="left:16px;right:auto">97.8% occ.</span></div>
				<div class="card-body"><p class="card-building">312 units · 14 floors · 2023</p><h3 class="card-title">Estoria Tower B</h3><p class="card-floor">6395 Elgin St. · Celina, DE</p><p class="post-excerpt">The flagship — double-height lobby, pool, gym and sky terraces on floors 9–14.</p></div>
			</article>
			<article class="card reveal">
				<div class="card-media"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/residence-exterior.jpg' ); ?>" alt="Estoria Garden Residences" loading="lazy"><span class="card-yield" style="left:16px;right:auto">99.1% occ.</span></div>
				<div class="card-body"><p class="card-building">48 units · 4 floors · 2016</p><h3 class="card-title">Estoria Garden Residences</h3><p class="card-floor">6402 Elgin St. · Celina, DE</p><p class="post-excerpt">Low-rise garden stock for long-stay tenants. Resale units appear monthly.</p></div>
			</article>
		</div>
	</div>
</section>

<section class="services" id="services">
	<div class="container-x section-pad">
		<div class="sec-head-center reveal">
			<p class="eyebrow"><?php esc_html_e( 'Services', 'estoria' ); ?></p>
			<h2 class="sec-title"><?php esc_html_e( 'A complete service for passive ownership', 'estoria' ); ?></h2>
			<p class="sec-sub"><?php esc_html_e( 'From selection to resale, one team manages the entire lifecycle of your investment.', 'estoria' ); ?></p>
		</div>
		<div class="service-grid">
			<?php
			$services = array(
				array( __( 'Investment Selection', 'estoria' ), __( 'We shortlist units by yield, floor, view and resale potential — you only see options that fit your budget and goals.', 'estoria' ) ),
				array( __( 'Hotel Management', 'estoria' ), __( 'A professional hotel operator handles bookings, cleaning, check-ins and guest support. You never deal with tenants.', 'estoria' ) ),
				array( __( 'Guaranteed Income', 'estoria' ), __( 'Your monthly payout is written into the contract in advance — paid even during low season or vacancy gaps.', 'estoria' ) ),
				array( __( 'Legal & Closing', 'estoria' ), __( 'Title check, purchase agreement, escrow and registration handled by our in-house legal team.', 'estoria' ) ),
				array( __( 'Fit-out & Furnishing', 'estoria' ), __( 'Turnkey furnishing packages engineered for rental performance — durable, photogenic, easy to maintain.', 'estoria' ) ),
				array( __( 'Resale & Exit', 'estoria' ), __( 'When you are ready, we list, stage and sell your unit to our waiting pool of income-focused buyers.', 'estoria' ) ),
			);
			foreach ( $services as $s ) :
			?>
			<article class="service-card reveal">
				<span class="service-icon" aria-hidden="true">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="8"/><path d="m9.5 12 2 2 3.5-4"/></svg>
				</span>
				<h3><?php echo esc_html( $s[0] ); ?></h3>
				<p><?php echo esc_html( $s[1] ); ?></p>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
