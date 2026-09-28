<?php
/**
 * Credibility sections: trust strip, calculator, guarantees, team, press.
 *
 * @package Estoria
 */
?>
<section class="trust-strip" aria-label="<?php esc_attr_e( 'Affiliations and certifications', 'estoria' ); ?>">
	<div class="container-x">
		<p class="trust-label"><?php esc_html_e( 'Regulated, audited & accredited', 'estoria' ); ?></p>
		<div class="trust-row">
			<?php
			$partners = array(
				array( 'Delaware REIA', 'Member 2014' ),
				array( 'First State Bank', 'Escrow partner' ),
				array( 'Hilton Certified', 'Operator standard' ),
				array( 'AICPA Audited', 'Annual review' ),
				array( 'NAR', 'Realtor® network' ),
			);
			foreach ( $partners as $p ) :
				$initials = '';
				foreach ( explode( ' ', $p[0] ) as $w ) { $initials .= substr( $w, 0, 1 ); }
				$initials = substr( $initials, 0, 2 );
			?>
			<div class="trust-item">
				<span class="trust-mark"><?php echo esc_html( $initials ); ?></span>
				<span><span class="trust-name"><?php echo esc_html( $p[0] ); ?></span><span class="trust-sub"><?php echo esc_html( $p[1] ); ?></span></span>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="calc" id="calculator">
	<div class="container-x section-pad calc-grid">
		<div class="reveal">
			<p class="eyebrow" style="color:#7fb0ff"><?php esc_html_e( 'Income calculator', 'estoria' ); ?></p>
			<h2 class="sec-title" style="color:#fff"><?php esc_html_e( 'See your guaranteed monthly income', 'estoria' ); ?></h2>
			<p class="sec-sub" style="color:#9aa0a9"><?php esc_html_e( 'Move the sliders to your budget and target unit. These figures reflect contracted net yields in the current release — the exact number goes in your agreement.', 'estoria' ); ?></p>
			<div class="calc-controls">
				<div class="calc-field">
					<div class="calc-field-top"><label for="calcAmount"><?php esc_html_e( 'Investment amount', 'estoria' ); ?></label><span id="calcAmountVal">$200,000</span></div>
					<input type="range" id="calcAmount" min="128000" max="389000" step="1000" value="200000">
					<div class="calc-range-lbl"><span>$128k</span><span>$389k</span></div>
				</div>
				<div class="calc-field">
					<div class="calc-field-top"><label for="calcYield"><?php esc_html_e( 'Net yield', 'estoria' ); ?></label><span id="calcYieldVal">7.6%</span></div>
					<input type="range" id="calcYield" min="6.8" max="8.4" step="0.1" value="7.6">
					<div class="calc-range-lbl"><span>6.8% (3-bed)</span><span>8.4% (studio)</span></div>
				</div>
			</div>
		</div>
		<div class="reveal">
			<div class="calc-result">
				<p class="calc-kicker"><?php esc_html_e( 'Guaranteed payout', 'estoria' ); ?></p>
				<p class="calc-big"><span id="calcMonthly">$1,266</span><small>/mo</small></p>
				<div class="calc-sub-grid">
					<div><p class="calc-sub-lbl"><?php esc_html_e( 'Per year', 'estoria' ); ?></p><p class="calc-sub-val" id="calcAnnual">$15,200</p></div>
					<div><p class="calc-sub-lbl"><?php esc_html_e( 'Over 10 years', 'estoria' ); ?></p><p class="calc-sub-val" id="calcTen">$152,000</p></div>
				</div>
				<ul class="calc-list">
					<li>✓ <?php esc_html_e( 'Net of operator fee, HOA & running costs', 'estoria' ); ?></li>
					<li>✓ <?php esc_html_e( 'Paid on the 5th, high season or low', 'estoria' ); ?></li>
					<li>✓ <?php esc_html_e( 'Fixed in your management contract', 'estoria' ); ?></li>
				</ul>
				<button type="button" class="btn-primary btn-block" data-open-callback><?php esc_html_e( 'Lock in this figure', 'estoria' ); ?></button>
				<p class="calc-note"><?php esc_html_e( 'Illustrative. Property tax (~0.55%/yr) paid separately.', 'estoria' ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="guarantees" aria-label="<?php esc_attr_e( 'Our guarantees', 'estoria' ); ?>">
	<div class="container-x section-pad">
		<div class="guarantee-grid">
			<?php
			$g_contract = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M7 3h7l4 4v14H7z"/><path d="M14 3v4h4"/><path d="M9.5 12h5M9.5 15.5h5"/><path d="m9.5 8.5 1 1 2-2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
			$g_reserve  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 9 12 4l9 5"/><path d="M5 9v9h14V9"/><path d="M9 18v-5h6v5"/></svg>';
			$g_audit    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="6"/><path d="m20 20-4.3-4.3"/><path d="m9 11 1.5 1.5L14 9" stroke-linecap="round" stroke-linejoin="round"/></svg>';
			$g_warranty = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3 5 6v6c0 4.4 3 7.4 7 9 4-1.6 7-4.6 7-9V6l-7-3Z"/><path d="m9.5 12 2 2 3.5-4" stroke-linecap="round" stroke-linejoin="round"/></svg>';
			$guarantees = array(
				array( $g_contract, __( 'Contract-backed', 'estoria' ), __( 'Every payout figure is a written obligation, not a projection.', 'estoria' ) ),
				array( $g_reserve, __( '$4.2M reserve fund', 'estoria' ), __( 'Ring-fenced to cover payouts during any vacancy gap.', 'estoria' ) ),
				array( $g_audit, __( 'AICPA audited', 'estoria' ), __( 'Occupancy and returns independently reviewed every year.', 'estoria' ) ),
				array( $g_warranty, __( '5-year warranty', 'estoria' ), __( 'Structural and operator warranty from the developer.', 'estoria' ) ),
			);
			foreach ( $guarantees as $g ) :
			?>
			<div class="guarantee-item reveal">
				<span class="guarantee-ico" aria-hidden="true"><?php echo $g[0]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static SVG. ?></span>
				<span><span class="guarantee-title"><?php echo esc_html( $g[1] ); ?></span><span class="guarantee-desc"><?php echo esc_html( $g[2] ); ?></span></span>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
