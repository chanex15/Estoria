<?php
/**
 * Hero + stats section.
 *
 * @package Estoria
 */
$title_a = get_theme_mod( 'estoria_hero_title_a', 'Real' );
$accent  = get_theme_mod( 'estoria_hero_accent', 'Estate' );
$title_b = get_theme_mod( 'estoria_hero_title_b', 'Investments' );
$sub     = get_theme_mod( 'estoria_hero_sub', 'Buy a furnished apartment in one of our Celina towers. Our hotel team rents it, maintains it and pays you a fixed amount every month — written into your contract before you sign.' );
$payout  = get_theme_mod( 'estoria_payout', '$1,240' );
$occ     = get_theme_mod( 'estoria_occupancy', '98.2%' );
?>
<section class="hero">
	<div class="container-x hero-grid">
		<div>
			<div class="hero-badges reveal">
				<span class="avail-pill"><span class="avail-dot"></span><?php esc_html_e( '12 units for sale this quarter', 'estoria' ); ?></span>
				<span class="hero-rating"><span class="stars">★★★★★</span> <strong>4.9</strong> <?php esc_html_e( 'from 912 owners', 'estoria' ); ?></span>
			</div>
			<h1 class="hero-title reveal">
				<?php echo esc_html( $title_a ); ?> <span class="accent"><?php echo esc_html( $accent ); ?></span><br>
				<?php echo esc_html( $title_b ); ?>
			</h1>
			<p class="hero-sub reveal"><?php echo esc_html( $sub ); ?></p>
			<form id="heroForm" class="hero-form reveal" novalidate aria-label="<?php esc_attr_e( 'Request a callback', 'estoria' ); ?>">
				<label class="screen-reader-text" for="heroPhone" style="position:absolute;left:-9999px"><?php esc_html_e( 'Your phone number', 'estoria' ); ?></label>
				<input type="tel" id="heroPhone" class="input-line" placeholder="<?php esc_attr_e( 'Your phone number', 'estoria' ); ?>" autocomplete="tel">
				<button type="submit" class="btn-primary"><?php esc_html_e( 'Call me back', 'estoria' ); ?></button>
			</form>
			<p class="form-error" id="heroError" hidden><?php esc_html_e( 'Enter a valid phone number so we can call you back.', 'estoria' ); ?></p>
			<p class="hero-note reveal"><?php esc_html_e( 'Average response time: 27 minutes · No obligation', 'estoria' ); ?></p>

			<div class="hero-features">
				<div class="reveal">
					<span class="feature-icon" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><circle cx="10" cy="8" r="3.4"/><path d="M3.5 19c.6-3.2 3.2-5 6.5-5s5.9 1.8 6.5 5"/><circle cx="17" cy="14" r="3.2" fill="#0e63e6" stroke="#fff" stroke-width="1.4"/></svg>
					</span>
					<h3><?php esc_html_e( 'Ease of Management', 'estoria' ); ?></h3>
					<p><?php esc_html_e( 'You just buy an apartment, and a professional hotel operator will do the rest for you', 'estoria' ); ?></p>
				</div>
				<div class="reveal">
					<span class="feature-icon" aria-hidden="true">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="13" r="7" fill="currentColor"/><path d="M12 8.5v-3M9.5 6.5h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/><path d="M12 10.6v4.9M10.2 11.6h2.2a1.1 1.1 0 0 1 0 2.2h-1.2a1.1 1.1 0 0 0 0 2.2h2.6" stroke="#fff" stroke-width="1.5" stroke-linecap="round"/></svg>
					</span>
					<h3><?php esc_html_e( 'Guaranteed Income', 'estoria' ); ?></h3>
					<p><?php esc_html_e( 'Guaranteed monthly income is prescribed in advance in the contract selection', 'estoria' ); ?></p>
				</div>
			</div>
		</div>

		<div class="hero-media reveal">
			<div class="hero-blob">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-towers.jpg' ); ?>" alt="<?php esc_attr_e( 'Estoria residential towers photographed at dusk', 'estoria' ); ?>" fetchpriority="high">
			</div>
			<div class="float-card float-payout">
				<p class="float-label"><?php esc_html_e( 'Rental pool payout', 'estoria' ); ?></p>
				<p class="float-big"><?php echo esc_html( $payout ); ?><small>/mo</small></p>
				<p class="float-live">● <?php esc_html_e( 'Fixed in contract · paid monthly', 'estoria' ); ?></p>
			</div>
			<div class="float-card float-occ">
				<p class="float-big"><?php echo esc_html( $occ ); ?></p>
				<p class="float-label"><?php esc_html_e( 'Avg. occupancy', 'estoria' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="stats" id="statsBlock" aria-label="<?php esc_attr_e( 'Key figures', 'estoria' ); ?>">
	<div class="container-x stats-grid">
		<div class="reveal"><p class="num" data-count="580" data-suffix="+">580+</p><p class="lbl"><?php esc_html_e( 'Apartments placed with investors', 'estoria' ); ?></p></div>
		<div class="reveal"><p class="num" data-count="8.4" data-suffix="%" data-decimals="1">8.4%</p><p class="lbl"><?php esc_html_e( 'Top net yield in the rental pool', 'estoria' ); ?></p></div>
		<div class="reveal"><p class="num" data-count="142" data-prefix="$" data-suffix="M">$142M</p><p class="lbl"><?php esc_html_e( 'Assets under management', 'estoria' ); ?></p></div>
		<div class="reveal"><p class="num" data-count="98.2" data-suffix="%" data-decimals="1">98.2%</p><p class="lbl"><?php esc_html_e( 'Average annual occupancy', 'estoria' ); ?></p></div>
	</div>
</section>
