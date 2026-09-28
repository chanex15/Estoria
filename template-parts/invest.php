<?php
/**
 * How it works + prices + about sections.
 *
 * @package Estoria
 */
?>
<section class="how" id="how">
	<div class="container-x section-pad how-grid">
		<div>
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'How it works', 'estoria' ); ?></p>
				<h2 class="sec-title"><?php esc_html_e( 'Own in weeks. Earn for years.', 'estoria' ); ?></h2>
				<p class="sec-sub"><?php esc_html_e( 'The average Estoria purchase closes in 14 days. Most owners receive their first guaranteed payout within 30 days of signing.', 'estoria' ); ?></p>
			</div>
			<div class="how-img reveal">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/building-facade.jpg' ); ?>" alt="<?php esc_attr_e( 'Facade detail of Estoria Tower B', 'estoria' ); ?>" loading="lazy">
			</div>
		</div>
		<ol class="steps">
			<li class="step reveal"><p class="n">01</p><h3><?php esc_html_e( 'Choose your unit', 'estoria' ); ?></h3><p><?php esc_html_e( 'We match 2–3 units to your budget and target yield, with floor plans, photos and payout math.', 'estoria' ); ?></p></li>
			<li class="step reveal"><p class="n">02</p><h3><?php esc_html_e( 'Sign & secure income', 'estoria' ); ?></h3><p><?php esc_html_e( 'Purchase agreement plus hotel contract with your fixed monthly figure — reviewed by our legal team.', 'estoria' ); ?></p></li>
			<li class="step reveal"><p class="n">03</p><h3><?php esc_html_e( 'Operator takes over', 'estoria' ); ?></h3><p><?php esc_html_e( 'Furnishing, photography, listing and guest management are handled without your involvement.', 'estoria' ); ?></p></li>
			<li class="step reveal"><p class="n">04</p><h3><?php esc_html_e( 'Get paid monthly', 'estoria' ); ?></h3><p><?php esc_html_e( 'Net payout arrives on the 5th of each month with a transparent statement and occupancy data.', 'estoria' ); ?></p></li>
			<li class="how-cta reveal">
				<div><h3><?php esc_html_e( 'See what $200,000 earns per month', 'estoria' ); ?></h3><p><?php esc_html_e( 'Free 15-minute call with payout examples for your budget.', 'estoria' ); ?></p></div>
				<button type="button" class="btn-primary" data-open-callback><?php esc_html_e( 'Call me back', 'estoria' ); ?></button>
			</li>
		</ol>
	</div>
</section>

<section class="prices" id="prices">
	<div class="container-x section-pad">
		<div class="sec-head-center reveal">
			<p class="eyebrow"><?php esc_html_e( 'Prices', 'estoria' ); ?></p>
			<h2 class="sec-title"><?php esc_html_e( 'Transparent pricing, contracted yields', 'estoria' ); ?></h2>
			<p class="sec-sub"><?php esc_html_e( 'All tiers include furnishing, hotel contract and management. No hidden fees.', 'estoria' ); ?></p>
		</div>
		<div class="price-grid">
			<article class="price-card reveal">
				<h3 class="price-tier"><?php esc_html_e( 'Studio Start', 'estoria' ); ?></h3>
				<p class="price-amount"><?php esc_html_e( 'from $128,000', 'estoria' ); ?></p>
				<p class="price-yield"><?php esc_html_e( 'up to 8.4% net', 'estoria' ); ?></p>
				<p class="price-desc"><?php esc_html_e( 'The lowest entry point into the Estoria rental pool. Ideal first investment.', 'estoria' ); ?></p>
				<ul class="tick-list">
					<li><?php esc_html_e( '412–480 sq ft studios', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Furnishing package included', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Guaranteed payout from month 1', 'estoria' ); ?></li>
					<li><?php esc_html_e( '5-year hotel contract', 'estoria' ); ?></li>
				</ul>
				<button type="button" class="btn-ghost" data-open-callback><?php esc_html_e( 'Check availability', 'estoria' ); ?></button>
			</article>
			<article class="price-card featured reveal">
				<span class="price-badge"><?php esc_html_e( 'Most popular', 'estoria' ); ?></span>
				<h3 class="price-tier"><?php esc_html_e( 'Comfort Investor', 'estoria' ); ?></h3>
				<p class="price-amount"><?php esc_html_e( 'from $186,500', 'estoria' ); ?></p>
				<p class="price-yield"><?php esc_html_e( 'up to 7.9% net', 'estoria' ); ?></p>
				<p class="price-desc"><?php esc_html_e( 'Our most requested format — one-bedroom units with the strongest occupancy.', 'estoria' ); ?></p>
				<ul class="tick-list">
					<li><?php esc_html_e( '620–700 sq ft one-bed units', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Premium furnishing + styling', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Guaranteed payout from month 1', 'estoria' ); ?></li>
					<li><?php esc_html_e( '7-year hotel contract', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Priority unit selection', 'estoria' ); ?></li>
				</ul>
				<button type="button" class="btn-primary" data-open-callback><?php esc_html_e( 'Book a viewing', 'estoria' ); ?></button>
			</article>
			<article class="price-card reveal">
				<h3 class="price-tier"><?php esc_html_e( 'Family Capital', 'estoria' ); ?></h3>
				<p class="price-amount"><?php esc_html_e( 'from $249,000', 'estoria' ); ?></p>
				<p class="price-yield"><?php esc_html_e( 'up to 7.4% net', 'estoria' ); ?></p>
				<p class="price-desc"><?php esc_html_e( 'Two-bedroom residences for larger capital and long-term appreciation.', 'estoria' ); ?></p>
				<ul class="tick-list">
					<li><?php esc_html_e( '890–1,300 sq ft residences', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Designer fit-out included', 'estoria' ); ?></li>
					<li><?php esc_html_e( 'Guaranteed payout from month 1', 'estoria' ); ?></li>
					<li><?php esc_html_e( '10-year hotel contract', 'estoria' ); ?></li>
				</ul>
				<button type="button" class="btn-ghost" data-open-callback><?php esc_html_e( 'Talk to an advisor', 'estoria' ); ?></button>
			</article>
		</div>
		<p class="price-note reveal"><?php esc_html_e( 'Yields shown are net of operator fee, HOA and standard running costs. Property tax (~0.55%/yr) paid separately.', 'estoria' ); ?></p>
	</div>
</section>

<section class="about" id="about">
	<div class="container-x section-pad about-grid">
		<div class="about-media reveal">
			<img class="main" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-tower.jpg' ); ?>" alt="<?php esc_attr_e( 'Estoria towers from street level', 'estoria' ); ?>" loading="lazy">
			<div class="about-badge">
				<div><p class="b-num">12</p><p class="b-lbl"><?php esc_html_e( 'Years building', 'estoria' ); ?></p></div>
				<span class="sep"></span>
				<div><p class="b-num">2</p><p class="b-lbl"><?php esc_html_e( 'Towers delivered', 'estoria' ); ?></p></div>
				<span class="sep"></span>
				<div><p class="b-num">640</p><p class="b-lbl"><?php esc_html_e( 'Happy owners', 'estoria' ); ?></p></div>
			</div>
		</div>
		<div class="about-copy">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'About us', 'estoria' ); ?></p>
				<h2 class="sec-title"><?php esc_html_e( 'A developer and operator under one roof', 'estoria' ); ?></h2>
				<p class="lead"><?php esc_html_e( 'Estoria designs, builds and manages its own towers in Celina, Delaware — which is why we can guarantee income where brokers can only project it. Our hotel team runs 480+ units at 98% occupancy, and every process from check-in to deep cleaning is handled in-house.', 'estoria' ); ?></p>
			</div>
			<ul class="tick-list check-grid reveal">
				<li><?php esc_html_e( 'In-house hotel operator', 'estoria' ); ?></li>
				<li><?php esc_html_e( 'Contracts with fixed payouts', 'estoria' ); ?></li>
				<li><?php esc_html_e( 'Turnkey furnishing included', 'estoria' ); ?></li>
				<li><?php esc_html_e( 'Transparent monthly reports', 'estoria' ); ?></li>
				<li><?php esc_html_e( 'Owner resale marketplace', 'estoria' ); ?></li>
				<li><?php esc_html_e( '5-year developer warranty', 'estoria' ); ?></li>
			</ul>
			<div class="about-cta reveal">
				<button type="button" class="btn-primary" data-open-callback><?php esc_html_e( 'Talk to sales', 'estoria' ); ?></button>
				<a class="btn-ghost" href="#apartments"><?php esc_html_e( 'Browse apartments', 'estoria' ); ?></a>
			</div>
		</div>
	</div>
</section>
