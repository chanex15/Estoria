<?php
/**
 * Leadership team + press sections.
 *
 * @package Estoria
 */
?>
<section class="team" id="team">
	<div class="container-x section-pad">
		<div class="sec-head">
			<div class="reveal">
				<p class="eyebrow"><?php esc_html_e( 'Leadership', 'estoria' ); ?></p>
				<h2 class="sec-title"><?php esc_html_e( 'The people accountable for your income', 'estoria' ); ?></h2>
				<p class="sec-sub"><?php esc_html_e( 'Real names, real roles. The same team designs the buildings, runs the rental pool and signs your contract.', 'estoria' ); ?></p>
			</div>
			<div class="reveal"><a class="btn-ghost" href="#contact"><?php esc_html_e( 'Meet us in Celina', 'estoria' ); ?></a></div>
		</div>
		<div class="team-grid">
			<?php
			$team = array(
				array( 'Jonathan Reyes', 'Founder & Managing Director', '20 years in Delaware residential development. Led the delivery of all three Estoria buildings.', 'JR' ),
				array( 'Sarah Lindqvist', 'Head of Hotel Operations', 'Former regional GM for a global hotel group. Runs the 628-unit rental pool at 98% occupancy.', 'SL' ),
				array( 'Michael Chen', 'Investment Director', 'Ex-REIT analyst. Builds the payout models and matches units to investor goals.', 'MC' ),
				array( 'Amelia Torres', 'Head of Legal & Closing', 'Delaware bar. Oversees title, escrow and every management contract in-house.', 'AT' ),
			);
			foreach ( $team as $m ) :
			?>
			<article class="team-card reveal">
				<span class="team-avatar"><?php echo esc_html( $m[3] ); ?></span>
				<h3 class="team-name"><?php echo esc_html( $m[0] ); ?></h3>
				<p class="team-role"><?php echo esc_html( $m[1] ); ?></p>
				<p class="team-bio"><?php echo esc_html( $m[2] ); ?></p>
			</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="press" aria-label="<?php esc_attr_e( 'Press mentions', 'estoria' ); ?>">
	<div class="container-x section-pad">
		<div class="sec-head-center reveal">
			<p class="eyebrow"><?php esc_html_e( 'In the press', 'estoria' ); ?></p>
			<h2 class="sec-title"><?php esc_html_e( 'What the market says about us', 'estoria' ); ?></h2>
		</div>
		<div class="press-grid">
			<?php
			$press = array(
				array( 'Delaware Business Times', 'One of the most consistent income-property operators in the First State.' ),
				array( 'Coastal Investor', "Estoria's contracted-yield model removes the guesswork from buy-to-let." ),
				array( 'PropTech Weekly', 'A rare developer that also runs the hotel — and shows you the numbers.' ),
			);
			foreach ( $press as $p ) :
			?>
			<figure class="press-card reveal">
				<span class="press-quote-mark">&ldquo;</span>
				<blockquote><?php echo esc_html( $p[1] ); ?></blockquote>
				<figcaption>&mdash; <?php echo esc_html( $p[0] ); ?></figcaption>
			</figure>
			<?php endforeach; ?>
		</div>
	</div>
</section>
